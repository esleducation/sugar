


-----------------------------
## API
-----------------------------

### $_s-default-transition-map({List} $transition) : {Map}
Take a transition as parameter and parse it to return the {Map} corresponding
The $transition parameter can be either a registered transition name or a custom css transition like : all .2s ease-in-out 2s
The $transition argument will be parsed with the [./_s-parse-properties.scss] function.

- Privacy : **Public**

- Return : **{Map}** : The corresponding transition map properties

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$transition | **{List}** | The registered transition name or the transition string to transform into map | required | 


#### Sample
```scss
// register a transition
\@include s-setup((
		transitions : (
			fast : all .2s ease-in-out,
			// other transitions...
		)
));

// registered transition
s-transition-map(fast);
// {
// 	property : all,
// 	duration : .2s,
// 	ease : ease-in-out
// }

// custom transition
s-transition-map(fast -delay .5s);
// {
// 	property : all,
// 	duration : .2s,
// 	ease : ease-in-out,
// 	delay : .5s
// }

```


