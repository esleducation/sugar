

-----------------------------
## Properties
-----------------------------

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } name
Store the cache name

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> } cache
Store the cache object

-----------------------------
## API
-----------------------------

### get({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } id) : { Mixed }
Get a value from the cache
- Privacy : **Public**

- Return : **{ Mixed }** : The cache value or null if not exist

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
id | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The id of the cache element to retreive | required | 


### get() : { Integer }
Get the now timestamp
- Privacy : **Public**

- Return : **{ Integer }** : The timestamp of now


### id,({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } id, { Mixed } value, { Integer } lifetime)
Set a value in the cache
- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
id | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The id of the cache element to set | required | 
value | **{ Mixed }** | The value to set in cache | required | 
lifetime | **{ Integer }** | The lifetime of this value in cache | required | 



