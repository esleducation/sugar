


-----------------------------
## API
-----------------------------

### @mixin({List}<string> $namespaces)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$namespaces | **{List}<string>** | The classes namespaces wanted | required | 


#### Sample
```scss
\@include s-classes(); // will print out all the classes
\@include s-classes('sugar.font'); // will print all the font classes
\@include s-classes('sugar.clearfix' 'sugar.pull'); // the clearfixes and the pull classes
// etc...

```


