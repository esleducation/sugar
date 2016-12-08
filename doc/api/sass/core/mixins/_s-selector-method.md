


-----------------------------
## API
-----------------------------

### $_sugar-selector-method({String} $method = null)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$method | **{String}** | The selector method to set | optional | null


#### Sample
```scss
\@include s-selector-method(SMACCS) {
		s-selector-method(BEM) // => SMACCS
		\@include s-selector-method(WEBCOMPONENT) {
			s-selector-method() // => 'SMACCS'
		}
}

```


