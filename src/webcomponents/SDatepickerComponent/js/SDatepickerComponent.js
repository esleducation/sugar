import SWebComponent from '../../../js/core/SWebComponent'
import __getAnimationProperties from '../../../js/dom/getAnimationProperties'
import __style from '../../../js/dom/style'
import Flatpickr from 'flatpickr/dist/flatpickr'
import __dispatchEvent from '../../../js/dom/dispatchEvent'
import __isInteger from '../../../js/utils/is/integer'
import __autoCast from '../../../js/utils/string/autoCast'

export default class SDatepickerComponent extends SWebComponent {

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

			/**
			 * Specify the name or id of the field to link the datepicker to
			 * @type  		{String}
			 */
			for : null,

			/**
			 * Displays the calendar inline
			 * @type 		{Boolean}
			 */
			inline : false,

			/**
			 * Specify the color to use to skin the datepicker.
			 * @physicalProp
			 * @observed
			 * @type		{String}
			 */
			color : null,

			/**
			 * Allows the user to enter a date directly input the input field. By default, direct entry is disabled.
			 * @type 		{Boolean}
			 */
			allowInput : false,

			/**
			 * Clicking on the input opens the date (time) picker. Disable this if you wish to open the calendar manually with `.open()`
			 * @type 		{Boolean}
			 */
			clickOpens : true,

			/**
			 * A string of characters which are used to define how the date will be displayed in the input box. The supported characters are defined in the table below.
			 * @type 		{String}
			 */
			dateFormat : 'Y-m-d',

			/**
			 * Set the initial selected date. Same as preloading a date string into an input's value attribute, but can also handle a Date object.
			 * @type 		{Date}{String}
			 */
			defaultDate : null,

			/**
			 * Disable some dates
			 * @see 		https://chmln.github.io/flatpickr/#disable
			 * @type 		{Array}
			 */
			disable : [],

			/**
			 * Specify if the datepicker is disabled or not
			 * @physicalProp
			 * @observed
			 * @type 		{Boolean}
			 */
			disabled : false,

			/**
			 * Disable all dates except the ones you specify.
			 * @see 		https://chmln.github.io/flatpickr/#enable
			 * @type 		{Array}
			 */
			enable : [],

			/**
			 * Enables time picker
			 * @type 		{Boolean}
			 */
			enableTime : false,

			/**
			 * Enables seconds in the time picker.
			 * @type 		{Boolean}
			 */
			enableSeconds : false,

			/**
			 * Adjusts the step for the hour input (incl. scrolling)
			 * @type 		{Integer}
			 */
			hourIncrement : 1,

			/**
			 * Adjusts the step for the minute input (incl. scrolling)
			 * @type 		{Integer}
			 */
			minuteIncrement : 5,

			/**
			 * The maximum date that a user can pick to.
			 * @type 		{Date}{String}
			 */
			maxDate : null,

			/**
			 * The minimum date that a user can start picking from
			 * @type 		{Date){String}}
			 */
			minDate : null,

			/**
			 * Hides the calendar. For use along with enableTime.
			 * @type 		{Boolean}
			 */
			noCalendar : false,

			/**
			 * Function(s) to trigger on every date selection
			 * @see 		https://chmln.github.io/flatpickr/#eventsAPI
			 * @type 		{Function}
			 */
			onChange : null,

			/**
			 * Function(s) to trigger on every time the calendar is closed
			 * @see 		https://chmln.github.io/flatpickr/#eventsAPI
			 * @type 		{Function}
			 */
			onClose : null,

			/**
			 * Function(s) to trigger on every time the calendar is opened
			 * @see 		https://chmln.github.io/flatpickr/#eventsAPI
			 * @type 		{Function}
			 */
			onOpen : null,

			/**
			 * Function to trigger when the calendar is ready
			 * @see 		https://chmln.github.io/flatpickr/#eventsAPI
			 * @type 		{Function}
			 */
			onReady : null,

			/**
			 * Function that expects a date string and must return a Date object
			 * @type 		{Function}
			 */
			parseDate : false,

			/**
			 * Show the month using the shorthand version (ie, Sep instead of September).
			 * @type 		{Boolean}
			 */
			shorthandCurrentMonth : false,

			/**
			 * Displays time picker in 24 hour mode without AM/PM selection when enabled.
			 * @type 		{Boolean}
			 */
			time24hr : true,

			/**
			 * When true, dates will parsed, formatted, and displayed in UTC. It's recommended that date strings contain the timezone, but not necessary
			 * @type 		{Boolean}
			 */
			utc : false,

			/**
			 * Enables display of week numbers in calendar
			 * @type 		{Boolean}
			 */
			weekNumbers : false,

			/**
			 * flatpickr can parse an input group of textboxes and buttons, common in Bootstrap and other frameworks.
			 * @see 		https://chmln.github.io/flatpickr/#strap
			 * @type 		{Boolean}
			 */
			wrap : false

		}
	}

	/**
	 * Physical props
	 * @definition 		SWebComponent.physicalProps
	 */
	static get physicalProps() {
		return ['color']
	}

	/**
	 * Component css
	 * @definition 		SWebcomponent.css
	 */
	static css(componentName, componentNameDash) {
		return `
			.flatpickr-input {
				cursor: pointer;
				z-index: 1
			}
			.flatpickr-mobileInput {
				opacity: 0;
				visibility: hidden;
				position: absolute;
				width: 0;
				height: 0;
				box-sizing: border-box;
				padding: 0
			}
			.flatpickr-calendar {
				background: #fff;
				opacity:0;
				pointer-events: none;
				margin-top:-20px;
				text-align: center;
				padding:1em;
				position: absolute;
				top:0; left: -200vw;
			}
			.flatpickr-calendar.open {
				opacity: 1;
				z-index: 99999;
				margin-top:0;
				pointer-events: all;
				top:0; left:0;
			}
			.flatpickr-calendar.inline {
				display: inline-block;
				position: relative;
				opacity:1;
				margin-top:0;
				pointer-events: all;
			}
			.flatpickr-calendar.static {
				position: relative
			}
			.flatpickr-calendar.static.open {
				display: block
			}
			.flatpickr-calendar.hasWeeks {
			}

			.flatpickr-month,
			.flatpickr-next-month i,
			.flatpickr-prev-month i {
				position: relative
			}

			.flatpickr-month {
				user-select:none;
				width:100%;
				display: flex;
			}
			.flatpickr-month > span {
				vertical-align: middle;
				height: 3em;
				line-height: 3em;
			}

			.flatpickr-next-month,
			.flatpickr-prev-month {
				text-decoration: none;
				cursor: pointer;
				width: 3em;
				display : inline-block !important;
				text-align: center;
			}
			.flatpickr-next-month[style*="none"],
			.flatpickr-prev-month[style*="none"] {
				pointer-events:none;
				opacity: .4;
			}
			.flatpickr-next-month svg,
			.flatpickr-prev-month svg {
				height: 1em;
			}
			.flatpickr-next-month svg path,
			.flatpickr-prev-month svg path {
				fill: inherit
			}
			.flatpickr-current-month {
				flex: 1 auto;
			}
			.flatpickr-current-month .cur-month {
				font-weight: bold;
			}
			.flatpickr-current-month .cur-year {
				padding: 0;
				margin: 0;
				width: 3.2em;
				display: inline;
				font-size: inherit;
				line-height: 0;
				height: initial;
				border: 0;
				border-radius: 0;
				vertical-align: initial;
				outline:none;
			}
			.flatpickr-current-month .cur-year:hover {
				background: rgba(0, 0, 0, .05)
			}
			.flatpickr-weekdays {
				padding:.5em 0;
				overflow: hidden;
			}
			span.flatpickr-weekday {
				cursor: default;
				margin: 0;
				text-align: center;
				display:inline-block;
				width: 5em;
				font-size:.6em;
				padding:.5em 0;
			}

			.flatpickr-rContainer {
				display: inline-block;
				width: 21em;
			}
			.flatpickr-days {
				outline: 0;
				text-align: left;
			}
			.flatpickr-day {
				width: 3em;
				height: 3em;
				line-height: 3em;
				cursor: pointer;
				display: inline-block;
				margin: 0;
				text-align: center;
			}
			.flatpickr-day.disabled,
			.flatpickr-day.disabled:hover,
			.flatpickr-day.nextMonthDay,
			.flatpickr-day.notAllowed,
			.flatpickr-day.notAllowed.nextMonthDay,
			.flatpickr-day.notAllowed.prevMonthDay,
			.flatpickr-day.prevMonthDay {
				color: rgba(57, 57, 57, .3);
				background: 0 0;
				border-color: transparent;
				cursor: default
			}
			.flatpickr-weekwrapper {
				padding-top:.5em;
				display: inline-block;
				float: left
			}
			.flatpickr-weekwrapper .flatpickr-weeks {
				padding: .5em .25rem 0 .25em;
			}
			.flatpickr-weekwrapper .flatpickr-weekday {
				float: none;
				width: 100%
			}
			.flatpickr-weekwrapper span.flatpickr-day {
				display: block;
				width: 100%
			}
			.flatpickr-time {
				overflow: auto;
				text-align: center;
				border-top: 0;
				outline: 0;
				display: block;
				display: flex;
				min-width:10em;
			}
			.flatpickr-am-pm {
				user-select:none;
			}
			.flatpickr-am-pm,
			.flatpickr-time input,
			.flatpickr-time-separator {
				height: 3em;
				display: inline-block;
				line-height: 3em;
				color: #393939
			}
			.flatpickr-time input {
				font-size: 1em;
				background: 0 0;
				box-shadow: none;
				border: 0;
				border-radius: 0;
				flex: 1;
				width: 33%;
				min-width: 33%;
				text-align: center;
				margin: 0;
				padding: 0;
				cursor: pointer;
			}
			.flatpickr-time input.flatpickr-minute {
				width: 26%;
			}
			.flatpickr-time input.flatpickr-second {
			}
			.flatpickr-time input:focus {
				outline: 0;
				border: 0
			}

			.flatpickr-time.has-seconds input[type=number] {
				width: 25%;
				min-width: 25%
			}
			.hasTime .flatpickr-days,
			.hasWeeks .flatpickr-days {
				border-bottom: 0;
				border-bottom-right-radius: 0;
				border-bottom-left-radius: 0
			}
			.hasWeeks .flatpickr-days {
				border-left: 0
			}

			.flatpickr-am-pm {
				outline: 0;
				width: 21%;
				padding: 0 2%;
				cursor: pointer;
				text-align: left;
			}

			@media all and (-ms-high-contrast: none) {
				.flatpickr-month {
					padding: 0
				}
				.flatpickr-month svg {
					top: 0 !important
				}
			}
		`;
	}

	/**
	 * Mount component
	 * @definition 		SWebComponent.componentMount
	 */
	componentMount() {
		super.componentMount();

		// get the datepicker input target
	 	this._target = this;
		if (this.props.for) {
			// try to get the input
			const input = document.querySelector(`[name="${this.props.for}"],input#${this.props.for}`);
			if (input) {
				this._target = input;
			}
		}

		// instanciate the datepicker
		this._instanciateDatepicker();
	}

	/**
	 * Create datepicker instance
	 */
	_instanciateDatepicker() {
		this._flatpickr = new Flatpickr(this._target, {
			clickOpens : this.props.clickOpens,
			dateFormat : this.props.dateFormat,
			defaultDate : this._target.value || this.props.defaultDate,
			disable : this.props.disable,
			enable : this.props.enable,
			enableTime : this.props.enableTime,
			enableSeconds : this.props.enableSeconds,
			hourIncrement : this.props.hourIncrement,
			inline : this.props.inline,
			maxDate : this.props.maxDate,
			minDate : this.props.minDate,
			minuteIncrement : this.props.minuteIncrement,
			noCalendar : this.props.noCalendar,
			onChange : (dateObj, dateStr, instance) => {
				this.props.onChange && this.props.onChange(dateObj, dateStr, instance);
				this.dispatchComponentEvent('change', {
					dateObj,
					dateStr,
					instance
				});
			},
			onClose : this.props.onClose,
			onOpen : (dateObj, dateStr, instance) => {
				this.props.onOpen && this.props.onOpen(dateObj, dateStr, instance);
			},
			onReady : (dateObj, dateStr, instance) => {
				this.props.onReady && this.props.onReady(dateObj, dateStr, instance);
				if (this._target.tagName.toLowerCase() === 'input') {
					if ( ! this._target.value) {
						instance.setDate(this.props.minDate || new Date());
					}
					instance.triggerChange();
				}
			},
			parseDate : this.props.parseDate ? this.props.parseDate.bind(this) : function(date) {
				// if the date is a time only
				if (this.props.noCalendar && this.props.enableTime) {
					return new Date(Date.parse(`2000.01.01 ${date}`));
				} else if (__isInteger(__autoCast(date))) {
					// it's a timestamp
					return new Date(parseInt(date) * 1000);
				}
				return new Date(Date.parse(date));
			}.bind(this),
			shorthandCurrentMonth : this.props.shorthandCurrentMonth,
			time_24hr : this.props.time24hr,
			utc : this.props.utc,
			weekNumbers : this.props.weekNumbers,
			wrap : this.props.wrap
		});
	}

	/**
	 * Will receive prop
	 */
	componentWillReceiveProp(name, newVal, oldVal) {
		switch(name) {
			case 'color':
			break;
			default:
				// destroy and recreate the datepicker
				this._flatpickr.destroy();
				this._instanciateDatepicker();
			break;
		}
	}

	/**
	 * Render
	 * @definition 		SWebComponent.render
	 */
	render() {
		super.render();
		// copy props
		if (this.props.color) {
			this._flatpickr.calendarContainer.setAttribute('color', this.props.color);
		}
	}
}
