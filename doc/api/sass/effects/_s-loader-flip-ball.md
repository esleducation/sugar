


-----------------------------
## API
-----------------------------

### @mixin({String} $shape = circle, {Number} $size = 1em, {Color} $color = primary, {Second} $a-duration = 1s, {Second} $a-delay = 0s, {String} $a-ease = ease-in-out)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$shape | **{String}** | The shape of the loader (circle,rect) | optional | circle
$size | **{Number}** | The size of the loader | optional | 1em
$color | **{Color}** | The color of the loader. Can be a list of colors | optional | primary
$a-duration | **{Second}** | The overall animation duration | optional | 1s
$a-delay | **{Second}** | The delay between two animation cycle | optional | 0s
$a-ease | **{String}** | The ease to use for the animation | optional | ease-in-out


#### Sample
```scss
.my-cool-loader {
		\@include s-loader-flip-ball();
}

```


