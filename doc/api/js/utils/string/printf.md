


-----------------------------
## API
-----------------------------

### printf({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } source, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array" target="_blank" title="Array">Array</a> }{...} values) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }
printf php equavalent
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** : The resulting string

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
source | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The source in which to replace the tokens | required | 
values | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array" target="_blank" title="Array">Array</a> }{...}** | An object/array/list of values to replace | required | 


#### Sample
```js
printf('Hello %s', 'world'); // => Hello world
printf('Hello %s, I\'m %s', 'world', 'John Doe'); // Hello world, I'm John Doe
printf('Hello %s, I\'m %s', ['world', 'John Doe']); // Hello world, I'm John Doe
printf('Hello {first}, I\'m {name}', { first : 'world', name : 'John Doe'}); // Hello world, I'm John Doe

```


