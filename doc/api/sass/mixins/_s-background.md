


-----------------------------
## API
-----------------------------

### @mixin({String} $repeat = null, {String} $size = null, {String} $attachment = null, {String} $blend-mode = null, {String} $clip = null, {String} $url = null, {Number} $width = null, {Number} $height = null, {Number} $top = null, {Number} $left = null, {String} $suffix2x = @2x, {String} $suffix3x = @3x, {String} $suffix4x = @4x, {List} $resolution = null, {List} $position = null)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$repeat | **{String}** | The background-repeat property | optional | null
$size | **{String}** | The background-size property | optional | null
$attachment | **{String}** | The background-attachment property | optional | null
$blend-mode | **{String}** | The background-blend-mode property | optional | null
$clip | **{String}** | The background-clip property | optional | null
$url | **{String}** | The background-image url property | optional | null
$width | **{Number}** | The background-size width property | optional | null
$height | **{Number}** | The background-size height property | optional | null
$top | **{Number}** | The background-position top property | optional | null
$left | **{Number}** | The background-position left property | optional | null
$suffix2x | **{String}** | The suffix to add the the url if the 2x resolution if wanted | optional | @2x
$suffix3x | **{String}** | The suffix to add the the url if the 3x resolution if wanted | optional | @3x
$suffix4x | **{String}** | The suffix to add the the url if the 4x resolution if wanted | optional | @4x
$resolution | **{List}** | The resolution wanted like 2x, 3x and 4x | optional | null
$position | **{List}** | The background-position property | optional | null


#### Sample
```scss
.my-cool-element {
		\@include s-background(
			$url : 'img/my-cool-image.jpg',
			$size : cover,
			resolution : 2x 3x 4x
		);
}

```


