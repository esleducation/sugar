/**
 * Grab all the visible element just once
 * And apply the callback when a new item match the selector
 */
import Rx from 'rx'
import querySelectorLive from './querySelectorLive'
import whenViewportVisible from './whenViewportVisible'

export default function querySelectorViewportVisibleLiveOnce(selector, cb, settings) {
	return Rx.Observable.create(observer => {
		querySelectorLive(selector, null, {
			...settings,
			once : false
		}).subscribe((elm) => {
			whenViewportVisible(elm).then((elm) => {
				if (cb) cb(elm);
				observer.next(elm);
			});
		});
	});
}
