


-----------------------------
## API
-----------------------------

### s-filter-map({List}<String> $filter) : {Map}
Take a filter as parameter and parse it to return the {Map} corresponding
The $filter parameter can be either a registered filter name or a filter formated like `filterName(filterValue)`

- Privacy : **Public**

- Return : **{Map}** : The corresponding filter map properties

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$filter | **{List}<String>** | The registered filter name or the filter string to transform into map | required | 


#### Sample
```scss
// register a filter
\@include s-setup((
		filters : (
			myCoolFilter : box-shadow(#000 0 0 10px) blur(30px),
			// other filters...
		)
));

// registered filter
s-filter-map(myCoolFilter);
// {
// 	box-shadow : #000 0 0 10px,
// 	blur : 30px
// }

// custom filter
s-filter-map(blur(10px));
// {
// 	blur : 10px
// }

```


