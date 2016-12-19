


-----------------------------
## API
-----------------------------

### @mixin({String} $name, {Map} $settings)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$name | **{String}** | The context name | required | 
$settings | **{Map}** | The settings to override for this context | required | 


#### Sample
```scss
\@include s-context-setup(my-cool-context, (
		look-and-feel : (
			padding-vertical : (
				default : 0.6em
			)
		)
));

// using your context
\@include s-context(my-cool-context) {
		s-look-and-feel(padding-vertical); // => 0.6em
}

```


