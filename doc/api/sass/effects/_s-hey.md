


-----------------------------
## API
-----------------------------

### @mixin({String} $vertical-align = top, {String} $align = left, {Number} $size = 20px, {Color} $color = primary, {Number} $offset-top = 0, {Number} $offset-right = 0, {Number} $offset-bottom = 0, {Number} $offset-left = 0)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$vertical-align | **{String}** | Where to put the dot verticaly (top,middle,bottom) | optional | top
$align | **{String}** | Where to put the dot horizontaly (left,center,right) | optional | left
$size | **{Number}** | The size of the dot | optional | 20px
$color | **{Color}** | The color of the dot | optional | primary
$offset-top | **{Number}** | The offset top | optional | 0
$offset-right | **{Number}** | The offset right | optional | 0
$offset-bottom | **{Number}** | The offset bottom | optional | 0
$offset-left | **{Number}** | The offset left | optional | 0


#### Sample
```scss
.my-cool-element {
		\@include s-hey(
			$align : right,
			$color : secondary,
			$size : 10px,
			$offset-top : -10px,
			$offset-right : -10px
		);
}

```


