


-----------------------------
## API
-----------------------------

### s-border({List} $border) : {Map}
Parse and return the Map respresentation of a border property
The $border argument will be parsed with the [s-parse-properties](../core/functions/_s-parse-properties.scss) function.

- Privacy : **Public**

- Return : **{Map}** : The Map represenration of the border

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$border | **{List}** | The border property to parse | required | 


#### Sample
```scss
s-border(1px solid white);
// return
// (
// 	width : 1px,
// 	color : white,
// 	style : solid
// )

```


