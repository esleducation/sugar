


-----------------------------
## API
-----------------------------

### @mixin({Color} $color = primary, {Number} $size = .33em, {Number} $radius = 1em, {Integer} $count = 5, {Number} $opacity = 1, {Number} $a-opacity = null, {Second} $a-duration = 1s, {Second} $a-delay = 0s, {Integer} $a-near = 1, {String} $a-ease = ease-in-out)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$color | **{Color}** | The color(s) of the loader. Can be a list of colors | optional | primary
$size | **{Number}** | The size of each dot | optional | .33em
$radius | **{Number}** | The distance of each dot from the center of the loader | optional | 1em
$count | **{Integer}** | How many bars you want | optional | 5
$opacity | **{Number}** | The initial opacity of each bars | optional | 1
$a-opacity | **{Number}** | The opacity of the animated bars | optional | null
$a-duration | **{Second}** | The overall animation duration | optional | 1s
$a-delay | **{Second}** | The delay between two animation cycle | optional | 0s
$a-near | **{Integer}** | How many bars are affected by the animated one | optional | 1
$a-ease | **{String}** | The ease to use to animate each bars | optional | ease-in-out



