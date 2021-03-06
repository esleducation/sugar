/**
 * Ease out cubic function
 *
 * @name 		easeOutCubic
 * @param 		{Number} 		t 		The current time
 * @return 		{Number} 				The value depending on time
 */
export default function (t) { return (--t)*t*t+1 };
