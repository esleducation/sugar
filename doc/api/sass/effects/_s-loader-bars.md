


-----------------------------
## API
-----------------------------

### @mixin({String} $shape = rect, {Color} $color = primary, {Number} $width = .5em, {Number} $height = 2em, {Integer} $count = 5, {Number} $gap = .5em, {Number} $opacity = 1, {Number} $a-opacity = null, {Second} $a-duration = 1s, {Second} $a-delay = 0s, {Integer} $a-near = 1, {String} $a-ease = ease-in-out, {Number} $a-offset = null, {String} $a-direction = both, {Boolean} $a-continuous = true)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$shape | **{String}** | The shape of the bars (rect,circle) | optional | rect
$color | **{Color}** | The color(s) of the loader. Can be a list of colors | optional | primary
$width | **{Number}** | The width of each bars | optional | .5em
$height | **{Number}** | The height of each bars | optional | 2em
$count | **{Integer}** | How many bars you want | optional | 5
$gap | **{Number}** | The gap between each bars | optional | .5em
$opacity | **{Number}** | The initial opacity of each bars | optional | 1
$a-opacity | **{Number}** | The opacity of the animated bars | optional | null
$a-duration | **{Second}** | The overall animation duration | optional | 1s
$a-delay | **{Second}** | The delay between two animation cycle | optional | 0s
$a-near | **{Integer}** | How many bars are affected by the animated one | optional | 1
$a-ease | **{String}** | The ease to use to animate each bars | optional | ease-in-out
$a-offset | **{Number}** | The offset to move the animated bar | optional | null
$a-direction | **{String}** | The direction in which to move the bars (up,down,both) | optional | both
$a-continuous | **{Boolean}** | If true, the first bars will be animated at same time at the last ones | optional | true


#### Sample
```scss
.my-cool-loader {
		\@include s-loader-bars(
			$color : primary,
			$a-offset : .5em
		);
}

```


