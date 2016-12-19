


-----------------------------
## API
-----------------------------

### @mixin({String} $side = bottom, {String} $align = center, {Number} $size = 10px, {Color} $color = s-color(primary), {Number} $arrow-offset = 10px, {Number} $border-width = 0, {Color} $border-color = null)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$side | **{String}** | The side (top,right,bottom,left) | optional | bottom
$align | **{String}** | The alignement (left,center,right,top,middle,bottom) | optional | center
$size | **{Number}** | The size of the arrow | optional | 10px
$color | **{Color}** | The color of the bubble | optional | s-color(primary)
$arrow-offset | **{Number}** | The arrow offset from the side of the bubble | optional | 10px
$border-width | **{Number}** | The border width of the bubble | optional | 0
$border-color | **{Color}** | The border color of the bubble | optional | null


#### Sample
```scss
.my-cool-bubble {
		\@include s-bubble(
			$color : s-color(secondary)
		);
		color : white;
}

```


