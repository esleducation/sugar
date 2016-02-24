/*
 * Sugar-activate.js
#
 * This little js file allow you to detect when an element has been inserted in the page in conjunction with the scss mixin
#
 * @author   Olivier Bossel <olivier.bossel@gmail.com>
 * @created  20.01.16
 * @updated  20.01.16
 * @version  1.0.0
 */
import SugarElement from '../core/sugar-element'
import sDom from '../core/sugar-dom'

// save all the activate elements
let _sDrawerStack = {};

// Actual activate element class
class SugarDrawerElement extends SugarElement {

	/**
	 * Setup
	 */
	static setup(type, settings) {
		SugarElement.setup('sDrawer', type, settings);
	}

	/**
	 * Constructor
	 */
	constructor(elm, settings = {}) {
		super('sDrawer', elm, {
			name : '@',
			closeOnClick : true,
			handleHash : true
		}, settings);

		// get the name
		this.name = this.setting('name');

		// add the class into the stack
		_sDrawerStack[this.name] = this;

		// init
		this.init();
	}

	/**
	 * Init
	 */
	init() {
		
		// try to find the drawer background
		this.bkg = document.querySelector('[data-s-drawer-bkg="'+this.name+'"]');
		if ( ! this.bkg) {
			this.bkg = document.createElement('div');
			this.bkg.setAttribute('data-s-drawer-bkg', this.name);
			// insert in the page
			this.elm.parentElement.insertBefore(this.bkg, this.elm.parentElement.firstChild);
		}

		// determine if has a transition
		let cs = window.getComputedStyle(this.elm);
		if (cs.transitionProperty != undefined && cs.transitionProperty != '') {
			this._transitionned = true;
		}

		// try to find the drawer overlay
		this.overlay = document.querySelector('[data-s-drawer-overlay="'+this.name+'"]');
		if ( ! this.overlay) {
			this.overlay = document.createElement('label');
			this.overlay.setAttribute('for', this.name);
			this.overlay.setAttribute('data-s-drawer-overlay', this.name);
			// insert in the page
			this.elm.parentElement.insertBefore(this.overlay, this.elm.parentElement.firstChild);
		}

		// try to find the toggle
		this.toggle = document.querySelector('[data-s-drawer-toggle="'+this.name+'"]');
		if ( ! this.toggle) {
			this.toggle = document.createElement('input');
			this.toggle.setAttribute('name', this.name);
			this.toggle.setAttribute('id', this.name);
			this.toggle.setAttribute('type', 'checkbox');
			this.toggle.setAttribute('data-s-drawer-toggle', this.name);
			// insert into page
			this.elm.parentElement.insertBefore(this.toggle, this.elm.parentElement.firstChild);
		}

		// listen for change on the toggle
		this.toggle.addEventListener('change', (e) => {
			let name = e.target.name;
			if (e.target.checked) {
				sDom.addClass(document.body, 's-drawer-'+this.name);
			} else {
				sDom.removeClass(document.body, 's-drawer-'+this.name);
			}
		});

		// listen for transitionend
		if (this._transitionned) {
			this.elm.addEventListener('transitionend', (e) => {
				if (this.toggle.checked == false) {
					sDom.removeClass(document.body, 's-drawer-'+this.name);
				}
			});
		}

		// listen for click on links into the drawer to close it
		if (this.setting('closeOnClick')) {
			this.elm.addEventListener('click', (e) => {
				if (e.target.nodeName.toLowerCase() == 'a') {
					// close the drawer
					this.close();
				}
			});
		}

		// if handle hach
		if (this.setting('handleHash')) {
			if (document.location.hash) {
				let hash = document.location.hash.substr(1);
				if (hash == this.name) {
					this.open();
				}
			}
		}
	}

	/**
	 * Open
	 */
	open() {
		// check the toggle
		this.toggle.setAttribute('checked', true);
		sDom.addClass(document.body, 's-drawer-'+this.name);
		return this;
	}

	/**
	 * Close
	 */
	close() {
		// uncheck the toggle
		this.toggle.removeAttribute('checked');
		if ( ! this._transitionned) {
			sDom.removeClass(document.body, 's-drawer-'+this.name);
		}
		return this;
	}

	/**
	 * Check if is opened
	 */
	isOpen() {
		return (this.toggle.checked);
	}
}

class SugarDrawerManager {
	
	/**
	 * Constructor
	 */
	constructor() {

		// what that the dom is ready
		sDom.domReady(() => {
			this._init();
		});
	}

	/**
	 * Init
	 */
	_init() {

		// init all elements in the page
		[].forEach.call(document.body.querySelectorAll('[data-s-drawer]'), (elm) => {
			new SugarDrawerElement(elm);
		});

		// listen for new element
		sDom.onInserted('[data-s-drawer]', (element) => {
			new SugarDrawerElement(element);
		});
	}

	/**
	 * Find a special activate element
	 */
	find(id) {
		if ( ! _sDrawerStack[id]) return false;
		return _sDrawerStack[id];
	}

	/**
	 * Open a special id
	 */
	open(id) {
		let item = this.find(id);
		if (item) return item.open();
	}

	/**
	 * Close
	 */
	close(id) {
		let item = this.find(id);
		if (item) return item.close();
	}

	/**
	 * Is open
	 */
	isOpen(id) {
		let item = this.find(id);
		if (item) return item.isOpen();
	}
};

// expose in window.sugar
if (window.sugar == null) { window.sugar = {}; }
window.sugar.drawerManager = new SugarDrawerManager();
window.sugar.DrawerElement = SugarDrawerElement;

// export modules
module.exports = {
	drawerManager : window.sugar.drawerManager,
	DrawerElement : SugarDrawerElement
};