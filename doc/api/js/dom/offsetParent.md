


-----------------------------
## API
-----------------------------

### offset({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } elm) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }
Get the offset top and left of the passed element from his parent top left point

- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }** : The offset top and left object

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
elm | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | The element to get the offset from | required | 


#### Sample
```js
import offsetParent from 'sugarcss/js/dom/offsetParent'
const offsetParentElm = offsetParent(myCoolElement);
// output : { top : 200, left : 300 }

```


