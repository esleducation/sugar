


-----------------------------
## API
-----------------------------

### @mixin({String} $name)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$name | **{String}** | The color schema name | required | 


#### Sample
```scss
\@include s-color-schema(light) {
		h1, h2 {
			color : white;
		}
}
// will print
.cs-light h1,
.cs-light h2 {
		color : white;
}

h1, h2 {
		\@include s-color-schema(light) {
			color : white;
		}
}
// will print
.cs-light h1, h1.cs-light,
.cs-light h2, h2.cs-light {
		color : white;
}

```


