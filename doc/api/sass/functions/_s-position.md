


-----------------------------
## API
-----------------------------

### s-position({String} $position = absolute, {String} $vertical-align = top, {String} $align = left, {Number} $top = null, {Number} $right = null, {Number} $bottom = null, {Number} $left = null) : {Map}
Return the representation of a position styling like position:absolute; top:0; left:100%; etc...
This function gives you some shortcuts to align your element top, bottom, middle, center, etc...

- Privacy : **Public**

- Return : **{Map}** : The map representation of the position wanted

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$position | **{String}** | The position css property | optional | absolute
$vertical-align | **{String}** | The vertical alignement wanted (top,middle,bottom) | optional | top
$align | **{String}** | The horizontal alignement wanted (left,center,right) | optional | left
$top | **{Number}** | The top property wanted | optional | null
$right | **{Number}** | The right property wanted | optional | null
$bottom | **{Number}** | The bottom property wanted | optional | null
$left | **{Number}** | The left property wanted | optional | null


#### Sample
```scss
s-position(absolute, top, right);
s-position(absolute, middle, center);
s-position(relative, bottom, right);
s-position(absolute, bottom, center);
// etc...

```


