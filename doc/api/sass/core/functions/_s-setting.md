


-----------------------------
## API
-----------------------------

### $_sugar-settings-cache({String} $path, {String} $context = s-context()) : {Mixed}
Get a settings from the global settings stack

- Privacy : **Public**

- Return : **{Mixed}** : The setting value¨

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$path | **{String}** | The setting path wanted separated by dots | required | 
$context | **{String}** | The context name to get the setting | optional | s-context()


#### Sample
```scss
$font-size : s-setting('typo.font-size');
// etc...

```


