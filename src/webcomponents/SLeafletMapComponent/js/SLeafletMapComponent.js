import SWebComponent from '../../../js/core/SWebComponent'
import { mix } from '../../../js/vendors/mixwith'
import __style from '../../../js/dom/style'
import sTemplateIntegrator from '../../../js/core/sTemplateIntegrator'
import * as L from 'leaflet';

export default class SLeafletMapComponent extends SWebComponent {

	/**
	 * Default props
	 * @definition 		SWebComponent.defaultProps
	 */
	static get defaultProps() {
		return {


			/**
			 * Set the initial zoom of the map
			 * @type 	{integer}
			 */
			zoom: 13,

			/**
			 * Set when to init the map if the placeholder setting is used
			 * @type 	{String}
			 */
			initOn: 'click'

		}
	}

	/**
	 * Mount component
	 * @definition 		SWebComponent.componentMount
	 */
	componentMount() {
		super.componentMount();

		L.Icon.Default.prototype.options.iconUrl = 'assets/img/map-marker.svg';
		L.Icon.Default.prototype.options.iconSize = [32, 32];
		L.Icon.Default.prototype.options.shadowUrl = 'assets/img/map-marker-shadow.svg';
		L.Icon.Default.prototype.options.shadowSize = [32, 32];

		// create the map container
		this._mapElm = document.createElement('div');

		const link = document.createElement('link');
		link.type = 'text/css';
		link.rel = 'stylesheet';
		link.href = 'https://unpkg.com/leaflet@1.3.4/dist/leaflet.css';
		link.integrity = 'sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==';
		link.crossOrigin = '';
		document.head.appendChild(link);

		// const script = document.createElement('script');
		// script.src = 'https://unpkg.com/leaflet@1.3.4/dist/leaflet.js';
		// script.integrity = 'sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==';
		// script.crossOrigin = '';
		// document.body.appendChild(script);

		// set the style to the map elm
		__style(this._mapElm, {
			position: 'absolute',
			top: 0,
			left: 0,
			width: '100%',
			height: '100%'
		});
		__style(this, {
			position: 'relative'
		});

		// try to get the placeholder
		this._placeholder = this.querySelector(`${this._componentNameDash}-placeholder`);

		// manage placeholder
		if (this._placeholder) {
			this._handlePlaceholder();
		} else {
			// init directly
			this._internalInit();
		}

		// append the map elm
		this.appendChild(this._mapElm);
	}

	/**
	 * Component unmount
	 * @definition 		SWebComponent.componentUnmount
	 */
	componentUnmount() {
		super.componentUnmount();
	}

	/**
	 * Component will receive props
	 * @definition 		SWebComponent.componentWillReceiveProps
	 */
	componentWillReceiveProps(nextProps) {
		if (!this._map) return;
		this._map.setOptions(nextProps);
	}

	/**
	 * Handle the placeholder element
	 */
	_handlePlaceholder() {
		// set style
		__style(this._placeholder, {
			position: 'absolute',
			top: 0,
			left: 0,
			width: '100%',
			height: '100%',
			cursor: 'pointer',
			zIndex: 1
		});

		// listen to init the map
		this._placeholder.addEventListener(this.props.initOn, this._onPlaceholderInit.bind(this));
	}

	/**
	 * Proxy function of placeholder init listener
	 */
	_onPlaceholderInit() {
		// remove the placeholder
		this._placeholder.parentNode.removeChild(this._placeholder);
		// stop listening for init on placeholder
		this._placeholder.removeEventListener(this.props.initOn, this._onPlaceholderInit);
		// internal init
		this._internalInit();
	}

	/**
	 * Init the map
	 */
	_internalInit() {
		// init the map
		this._initMap();
	}

	/**
	 * Init the map
	 */
	_initMap() {
		const map = L.map(this._mapElm, {
			center: [this.props.center.lat, this.props.center.lng],
			zoom: this.props.zoom
		});

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
			maxZoom: 18
		}).addTo(map);

		this.props.markers.forEach(marker => {
			L.marker([marker.lat, marker.lng], { title: marker.title }).addTo(map);
		});

		// set the component as inited
		// used by the markers to init when the map is ok
		this.setAttribute('inited', true);
	}

	/**
	 * Access the leaflet map instance
	 * @return 	{Map} 	The leaflet map instance
	 */
	get map() {
		return this._map;
	}

}

