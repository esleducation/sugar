


-----------------------------
## API
-----------------------------

### s-columns({Interger} $count = null, {Number} $gap = null, {String} $fill = null, {Number} $width = null, {Integer}{String} $span = null, {List} $rule = null, {String} $rule-style = null, {Color} $rule-color = null, {Number} $rule-width = null) : {Map}
Return the Map representation of a columns properties
- Privacy : **Public**

- Return : **{Map}** : The map representation or the columns properties

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$count | **{Interger}** | The number of columns | optional | null
$gap | **{Number}** | The gap width between each columns | optional | null
$fill | **{String}** | The fill property (balance,auto,initial,inherit) | optional | null
$width | **{Number}** | The width of the columns | optional | null
$span | **{Integer}{String}** | The column-span property (1,all,initial,inherit) | optional | null
$rule | **{List}** | The column-rule property | optional | null
$rule-style | **{String}** | The column-rule-style property | optional | null
$rule-color | **{Color}** | The column-rule-color property | optional | null
$rule-width | **{Number}** | The column-rule-width property | optional | null


#### Sample
```scss
s-columns(2, 20px);
// return
// (
// 	column-count : 2,
// 	column-gap : 20px
// )

```


