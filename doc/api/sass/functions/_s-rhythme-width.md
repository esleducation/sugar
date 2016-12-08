


-----------------------------
## API
-----------------------------

### s-rhythme-width({Integer} $letters-count = settings.typo.line-letters-count) : {Map}
Return the Map properties representation for the rhythme width
The rhythme width is the width of an element that target a certain number of letters by line

- Privacy : **Public**

- Return : **{Map}** : The Map properties representation

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$letters-count | **{Integer}** | The number of letters to target by line | optional | settings.typo.line-letters-count


#### Sample
```scss
s-rhythme-width(50);
// return
// (
// 	display : block,
// 	max-width : 50ex
// )

```


