


-----------------------------
## API
-----------------------------

### s-selector-method({String} $default = settings.selector.method) : {String}
Return the selector method define at the top level with the the [../mixins/_s-selector-method.scss] mixin

- Privacy : **Public**

- Return : **{String}** : The selector method

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$default | **{String}** | The selector method to return if no top selector method exist | optional | settings.selector.method


#### Sample
```scss
s-selector-method() // => settings.selector.method
s-selector-method(BEM) // => BEM
\@include s-selector-method(SMACCS) {
		s-selector-method(BEM) // => SMACCS
		\@include s-selector-method(WEBCOMPONENT) {
			s-selector-method() // => SMACCS
		}
}

```


