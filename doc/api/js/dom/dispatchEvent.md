


-----------------------------
## API
-----------------------------

### dispatchEvent({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } target, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } name, { Mixed } data)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
target | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | The element to dispatch the event from | required | 
name | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The event name to dispatch | required | 
data | **{ Mixed }** | The data to attache to the event | required | 


#### Sample
```js
import dispatchEvent from 'sugarcss/js/dom/dispatchEvent'
dispatchEvent(myCoolHTMLElement, 'myCoolEventName', {
		var1 : 'value1'
});

```


