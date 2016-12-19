


-----------------------------
## API
-----------------------------

### @mixin({Number} $size = 1em, {Color} $color = primary, {Second} $a-duration = 1s, {Second} $a-delay = 0s, {String} $a-ease = ease-in-out, {Degree} $a-rotate = 360deg, {Number} $a-scale = .7)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$size | **{Number}** | The size of the loader | optional | 1em
$color | **{Color}** | The color of the loader | optional | primary
$a-duration | **{Second}** | The overall animation duration | optional | 1s
$a-delay | **{Second}** | The delay between two animation cycle | optional | 0s
$a-ease | **{String}** | The ease to use for the animation | optional | ease-in-out
$a-rotate | **{Degree}** | The animation rotation | optional | 360deg
$a-scale | **{Number}** | The animation scale | optional | .7


#### Sample
```scss
.my-cool-loader {
		\@include s-loader-couch-potato();
}

```


