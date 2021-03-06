


-----------------------------
## API
-----------------------------

### getStyleProperty({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } elm, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } property) : { Mixed }
Get a style property on the passed element through the computed style.
This function try to store the actual style to not trigger more that 1 redraw
each js execution loop.

- Privacy : **Public**

- Return : **{ Mixed }** : The style value

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
elm | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | The element to get style from | required | 
property | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The css property to get | required | 


#### Sample
```js
import getStyleProperty from 'sugarcss/js/dom/getStyleProperty'
const opacity = getStyleProperty(myCoolHTMLElement, 'opacity');

```


