


-----------------------------
## API
-----------------------------

### $_sugar-component-name({String} $name = null, {String}{Map} $context = null)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$name | **{String}** | The name of the component to set | optional | null
$context | **{String}{Map}** | A context name or map to use inside the mixin | optional | null


#### Sample
```scss
\@include s-component('my-component') {
		s-component('hello') // => 'my-component'
		\@include s-component('another-component') {
			s-component('hello') // => 'my-component'
		}
}

```


