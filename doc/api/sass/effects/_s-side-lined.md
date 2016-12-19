


-----------------------------
## API
-----------------------------

### @mixin({String} $style = solid, {String} $side = both, {Number} $height = 1px, {Number} $width = 50%, {Color} $color = text, {Number} $padding = 0, {Number} $offset-top = null)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$style | **{String}** | The line style, same possible values as the border-style property | optional | solid
$side | **{String}** | The side where to put lines (left,right,both) | optional | both
$height | **{Number}** | The lines height | optional | 1px
$width | **{Number}** | The width of the lines | optional | 50%
$color | **{Color}** | The color of the lines | optional | text
$padding | **{Number}** | The padding between the lines and the content | optional | 0
$offset-top | **{Number}** | The line offset top | optional | null


#### Sample
```scss
h1 {
		\@include s-side-lined(
			$padding : 20px,
			$side : right,
			$width : 100%
		);
}

```


