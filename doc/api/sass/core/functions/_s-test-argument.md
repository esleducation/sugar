


-----------------------------
## API
-----------------------------

### s-test-argument({String} $method, {String} $argument, {List}{String} $type-or-values, {Mixed} $value, {Boolean} $check-only = false) : {Mixed}
Test an argument passed to a function or a mixin to ensure his type, value, etc...
If the argument does not pass the test, an error will be thrown, unless the $check-only argument is true

- Privacy : **Public**

- Return : **{Mixed}** : The value if ok, false if not

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$method | **{String}** | The function/mixin name (debug purpose) | required | 
$argument | **{String}** | The argument name to test (debug purpose) | required | 
$type-or-values | **{List}{String}** | If string, the type(s) that the argument must match, if list, the possible values that the argument can take | required | 
$value | **{Mixed}** | The actual argument value | required | 
$check-only | **{Boolean}** | If this is true, will not thrown any error | optional | false


#### Sample
```scss
\@mixin my-cool-mixin($argument1, $argument2) {
       $argument1 : s-test-argument(my-cool-mixin, argument1, string, $argument1);
       $argument2 : s-test-argument(my-cool-mixin, argument2, (hello,world,12), $argument2);
}
\@mixin my-cool-mixin(hello, world); // ok
\@mixin my-cool-mixin(hello, universe); // throw an error
\@mixin my-cool-mixin(12, world); // throw an error

```


