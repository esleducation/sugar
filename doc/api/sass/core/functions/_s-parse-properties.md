


-----------------------------
## API
-----------------------------

### s-parse-properties({List} $properties, {Map} $descriptor) : {Map}
Parse a given string/list properties and return the Map corresponding to the Map description

- Privacy : **Public**

- Return : **{Map}** : The properties in map format

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$properties | **{List}** | The properties to parse | required | 
$descriptor | **{Map}** | The descriptor map to use to parse the properties | required | 


#### Sample
```scss
s-parse-properties(10px hello -delay 20s, (
 	myNumber : Number,
 	myOtherNumber : Number,
 	myString : String,
 	myCoolVar : String,
 	delay : second
));
// => (
//  	myNumber : 10px,
// 	myString : hello,
// 	delay : 20s
// )

```


