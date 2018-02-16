/**
 * Auto cast the string into the correct variable type
 */
export default function autoCast(string) {
	// boolean values
	if (string === 'false'
		|| string === 'true'
		|| string === 'undefined'
		|| string === 'null'
		|| !isNaN(string)) {
		// console.log(string);
		return eval(string);
	}
	// array
	if (typeof(string) === 'string' && string.substr(0,1) === '[') {
		const val = eval(string);
		if (val instanceof Array) return val;
	}
	// parse json
	if (typeof(string) === 'string' && string.substr(0,1) === '{') {
		// console.log(string);
		return eval('('+string+')');
	}
	// window. || document.
	if (typeof(string) === 'string'
		&& (string.indexOf('window.') === 0
			|| string.indexOf('document.') === 0
		)
	) {
		const val = eval(string);
		if (val) return val;
	}
	// return the string if nothing can be casted
	return string;
}
