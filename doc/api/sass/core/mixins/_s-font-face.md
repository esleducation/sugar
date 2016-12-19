


-----------------------------
## API
-----------------------------

### @mixin({String} $font-family, {String} $src, {List} $extensions = woff2, {String} $font-weight = normal, {String} $font-style = normal)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$font-family | **{String}** | The font-family | required | 
$src | **{String}** | The source url (only 1 extension) | required | 
$extensions | **{List}** | The extensions list that you have available | optional | woff2
$font-weight | **{String}** | The font-weight property | optional | normal
$font-style | **{String}** | The font-style property | optional | normal


#### Sample
```scss
// if you have these extensions files : .woff .eot .woff2
\@include s-font-face(
		$name : my-cool-font,
		$src : '/fonts/my-font.eot',
		$extensions : eot woff woff2
)

```


