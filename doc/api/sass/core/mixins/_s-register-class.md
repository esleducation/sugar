


-----------------------------
## API
-----------------------------

### @mixin({String} $classname, {String} $namespace)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$classname | **{String}** | The classname that will be printed out | required | 
$namespace | **{String}** | The dots separated namespace under which the class will live | required | 


#### Sample
```scss
\@include s-register-class(my-cool-class, 'my.cool.namespace') {
		background : pink;
}
\@include s-register-class(another-cool-class, 'my.another.namespace') {
		background : red;
}

// print out my helpers classes
\@include s-classes('my');

```


