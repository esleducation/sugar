import SugarSvgFilter from './sugar-svgfilter'

export default class SugarGooeyFilter extends SugarSvgFilter {

	/**
	 * Constructor
	 */
	constructor(amount = 8) {
		super(`
			<feGaussianBlur in="SourceGraphic" stdDeviation="${amount}" result="blur" />
			<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 ${(parseInt(amount) + 9)} -9" result="gooey" />
			<feComposite in="SourceGraphic" in2="gooey" operator="atop"/>
		`);
		this._blur = this.filter.querySelector('feGaussianBlur');
		this._color_matrix = this.filter.querySelector('feColorMatrix');
	}

	/**
	 * Set blur
	 */
	set blur(value) {
		this._blur.setAttribute('stdDeviation', value);
	}

	/**
	 * Set contrast
	 */
	set contrast(value) {
		// get value
		let v = this._color_matrix.getAttribute('values');
		// process
		v = v.split(' ');
		v[v.length - 2] = value;
		// apply the new filter
		this._color_matrix.setAttribute('values', v.join(' '));
	}

	/**
	 * Set shrink
	 */
	set shrink(value) {
		// get value
		let v = this._color_matrix.getAttribute('values');
		// process
		v = v.split(' ');
		v[v.length - 1] = value;
		// apply the new filter
		this._color_matrix.setAttribute('values', v.join(' '));
	}

	/**
	 * Set amount
	 */
	set amount(value) {
		this._blur.setAttribute('stdDeviation', value);
		this._color_matrix.setAttribute('values', `1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 ${(parseInt(value) + 9)} -9`);
	}
}