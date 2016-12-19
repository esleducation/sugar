


-----------------------------
## API
-----------------------------

### s-margin({List}{Number} $margin) : {Map}
Parse and return the Map respresentation of a margin property
The $margin argument will be parsed with the [s-parse-properties](../core/functions/_s-parse-properties.scss) function.

- Privacy : **Public**

- Return : **{Map}** : The map representation

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$margin | **{List}{Number}** | The margin property to parse | required | 


#### Sample
```scss
s-margin(10px); // => ( top:10px, right:10px, bottom:10px, left:10px )
s-margin(10px 20px); // => ( top:10px, right:20px, bottom:10px, left:20px )
s-margin(5px 10px 15px 20px); // => ( top:5px, right:10px, bottom:15px, left:20px )

```


