


-----------------------------
## API
-----------------------------

### @mixin({Color} $color = rgba(0,0,0,.3), {String} $type = text, {Degree} $angle = 135deg, {Integer} $depth = 20, {Boolean} $fade = false, {Number} $blur = 0, {Number} $blur-ratio = 0)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$color | **{Color}** | The shadow color | optional | rgba(0,0,0,.3)
$type | **{String}** | The shadow type (text,box) | optional | text
$angle | **{Degree}** | The shadow angle | optional | 135deg
$depth | **{Integer}** | The shadow depth | optional | 20
$fade | **{Boolean}** | If true, the shadow will fade itself | optional | false
$blur | **{Number}** | The blur amount of the shadow | optional | 0
$blur-ratio | **{Number}** | The ratio to blur each depth more | optional | 0


#### Sample
```scss
.my-cool-title {
		\@include s-long-shadow(
			$depth : 10
		);
}
.my-cool-box {
		\@include s-long-shadow(
			$type : box
		);
}

```


