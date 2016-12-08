


-----------------------------
## API
-----------------------------

### @mixin({List} $transitions) : {List}
Take a transition as parameter and print the corresponding transition property
The $transitions parameter can be either a registered transition name or a custom css transition like : all .2s ease-in-out 2s
The $transitions argument will be parsed with the [./_s-parse-properties.scss] function.

- Privacy : **Public**

- Return : **{List}** : The corresponding transition list properties

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$transitions | **{List}** | The registered transition(s) name(s) or the transition(s) strings(s) to transform into list | required | 


#### Sample
```scss
// register a transition
\@include s-setup((
		transitions : (
			fast : all .2s ease-in-out 0s,
			// other transitions...
		)
));

// registered transition
.my-cool-element {
		\@include s-transition(fast>);
		// transition : all .2s ease-in-out 0s;
}

// custom transition
.my-cool-element {
		\@include s-transition(fast -delay .5s, fase width ease-in);
 	// transition : all .2s ease-in-out .5s, width .2s ease-in 0s;
}

```


