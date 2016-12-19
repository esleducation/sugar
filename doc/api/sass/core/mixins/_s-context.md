


-----------------------------
## API
-----------------------------

### @mixin({String}{Map} $name-or-map)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$name-or-map | **{String}{Map}** | The name of a registered context or a map | required | 


#### Sample
```scss
// register a context
\@include s-context-setup(my-cool-context, (
		look-and-feel : (
			padding-vertical : (
				default : 0.6em
			)
		)
));

// registered context
\@include s-context(my-cool-context) {
		// your code here...
}

// inline context
\@include s-context((
		look-and-feel : (
			padding-vertical : (
				default : .3em
			)
		)
)) {
		// your code here...
}

```


