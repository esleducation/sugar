


-----------------------------
## API
-----------------------------

### stylesheetsReady({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array" target="_blank" title="Array">Array</a> }<HTMLLinkElement> links, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> } cb = null) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Promise" target="_blank" title="Promise">Promise</a> }
Wait until all the HTMLLinkElement's are properly loaded

- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Promise" target="_blank" title="Promise">Promise</a> }** : The promise that will be resolved when all the links are loaded

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
links | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array" target="_blank" title="Array">Array</a> }<HTMLLinkElement>** | The HTMLLinkElement tags to process | required | 
cb | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> }** | An optional callback function to call when all the links are loaded | optional | null


#### Sample
```js
import stylesheetsReady from 'sugarcss/js/dom/stylesheetsReady'
stylesheetsReady([
		myHTMLLinkElement1,
		myHTMLLinkElement2
]).then(() => {
		// do something when all the links are loaded
});

```


