import SWebComponent from '../../../js/core/SWebComponent'
import sTemplateIntegrator from '../../../js/core/sTemplateIntegrator'
import __dispatchEvent from '../../../js/dom/dispatchEvent'
import __offset from '../../../js/dom/offset'
import fastdom from 'fastdom'

export default class SEqualizeComponent extends SWebComponent {

	/**
	 * @constructor
	 */
	constructor() { super(); }

	/**
	 * Default props
	 * @definition 		SWebComponent.defaultProps
	 */
	static get defaultProps() {
		return {
			group: null,
			resizeTimeout: 200,
		}
	}

	/**
	 * Required props
	 * @definition 		SWebComponent.requiredProps
	 */
	static get requiredProps() {
		return ['group'];
	}

	/**
	 * Reference to all the columns by groups
	 * Store value format :
	 * groupId : {
	 * 		inProgress : false // set if an equalize in in progress on this group or not
	 * 		columns : [] // store all the columns
	 * }
	 */
	static groups = {};

	componentWillMount() {
		super.componentWillMount();
		this.style.display = 'block';
	}

	/**
	 * Mount component
	 * @definition 		SWebComponent.componentMount
	 */
	componentMount() {
		super.componentMount();

		if (!SEqualizeComponent.groups[this.props.group]) {
			SEqualizeComponent.groups[this.props.group] = {
				refreshLinesInProgress: false,
				elements: [],
				lines: []
			};
		}
		SEqualizeComponent.groups[this.props.group].elements = document.querySelectorAll(`${this._componentNameDash}[group="${this.props.group}"]`);

		// init lines
		this.lines = [];

		// equalize
		this.equalizeLineByLine();

		// listen for resizing window
		let resizeWindowTimeout;
		window.addEventListener('resize', (e) => {
			clearTimeout(resizeWindowTimeout);
			resizeWindowTimeout = setTimeout(() => {
				this.equalize();
			}, this.props.resizeTimeout);
		});
	}

	get equalizerElm() {
		if (this._equalizerElmCache) return this._equalizerElmCache;
		this._equalizerElmCache = this.querySelector(`${this._componentNameDash}-equalizer`);
		return this._equalizerElmCache;
	}

	/**
	 * Group one line, equalize it and then go for the next one.
	 * This way you make sure next line is not messed with displaced objects
	 */
	equalizeLineByLine(force = false) {
		if (!force && SEqualizeComponent.groups[this.props.group].refreshLinesInProgress) return;
		else {
			SEqualizeComponent.groups[this.props.group].refreshLinesInProgress = true;

			const filteredAndSortedEls = [].filter.call(SEqualizeComponent.groups[this.props.group].elements, (elm) => {
				return elm.clientHeight > 0;
			})
				.sort((elm1, elm2) => {
					return __offset(elm1).top - __offset(elm2).top;
				});

			this.lines = [];
			this.checkLines(filteredAndSortedEls);
		}
	}

	checkLines(elements) {
		const currentLine = this.getNewLine();
		let pendingElements = elements.slice(0);

		// do some because it stops when new line is found
		[].some.call(elements, (el) => {
			this.resetEqualizer(el);

			// console.log(pendingElements.length, el.innerText.slice(1, 10));
			if (!this.checkIfElementInLine(el, currentLine)) {
				this.lines.push(currentLine);
				return true;
			}
			else {
				currentLine.height = Math.max(currentLine.height, el.offsetHeight);
				currentLine.elements.push(el);
				pendingElements.shift();

				return false;
			}
		});

		this.equalizeLine(currentLine, this.checkNextLine.bind(this, pendingElements));
	}

	checkNextLine(pendingElements) {
		if (pendingElements && pendingElements.length) {
			this.checkLines(pendingElements);
		} else {
			SEqualizeComponent.groups[this.props.group].refreshLinesInProgress = false;
		}
	}

	resetEqualizer(el) {
		if (el.equalizerElm) {
			el.equalizerElm.style.minHeight = 0;
		} else {
			el.style.minHeight = 0;
		}
	}

	getNewLine() {
		return {
			inProgress: false,
			height: 0,
			elements: []
		};
	}

	/**
	 * Compare top position to decide whether they belong to the same line or not
	 */
	checkIfElementInLine(el, line) {
		if (line.elements.length === 0) {
			return true;
		}
		else {
			return __offset(el).top === __offset(line.elements[0]).top;
		}
	}

	/**
	 * Get line from element
	 */
	getLineFromElm(elm) {
		// loop on lines
		for (let key in SEqualizeComponent.groups[this.props.group].lines) {
			const line = SEqualizeComponent.groups[this.props.group].lines[key];
			if (line.elements.indexOf(elm) !== -1) return line;
		}
		return null;
	}

	/**
	 * Equalize line
	 */
	equalizeLine(line, callback) {

		// do nothing if the line is already in progress
		if (line.inProgress) return;
		// flag the line as inProgress
		line.inProgress = true;

		setTimeout(() => {
			// loop on each columns
			[].forEach.call(line.elements, (element) => {
				element.classList.add('clear-transmations');
				// reset the equalizer or element min-height
				// to get the real height of the element
				this.resetEqualizer(element);
			});
			// loop on each columns
			[].forEach.call(line.elements, (element) => {
				// check if an equalizer exist to use it
				// @TODO : find a way to not query each time in the column for the equalizer
				// reset the equalizer or element min-height
				// to get the real height of the element
				if (element.equalizerElm) {
					element.equalizerElm.style.display = 'block';
					element.equalizerElm.style.minHeight = line.height - element.offsetHeight + 'px';
				} else {
					element.style.minHeight = line.height + 'px';
				}
			});
			[].forEach.call(line.elements, (element) => {
				element.classList.remove('clear-transmations');
			});
			// reset the line progress status
			line.inProgress = false;

			if (callback) {
				callback();
			}
		});
	}

	/**
	 * Equalize
	 */
	equalize(elmOrLine = null) {
		// if we have an element passed
		if (elmOrLine && elmOrLine.tagName) {
			// equalize from an element
			const line = this.getLineFromElm(elmOrLine);
			if (!line) return;
			this.equalizeLine(line);
		} else if (elmOrLine && elmOrLine.elements) {
			// equalize a line directly
			this.equalizeLine(elmOrLine);
		} else {
			// equalize the whole set
			SEqualizeComponent.groups[this.props.group].lines.forEach((line) => {
				// equalize line
				this.equalizeLine(line);
			});
		}
		setTimeout(() => {
			__dispatchEvent(this, 'update:height');
		});
	}
}

// STemplate integration
sTemplateIntegrator.registerComponentIntegration(SEqualizeComponent, (component) => {
	sTemplateIntegrator.ignore(component, {
		style: true,
	});
	if (component.equalizerElm) {
		sTemplateIntegrator.ignore(component.equalizerElm, {
			style: true
		});
	}
});
