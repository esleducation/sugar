


-----------------------------
## API
-----------------------------

### @mixin({Map} $settings)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$settings | **{Map}** | The settings to override | required | 


#### Sample
```scss
\@include s-setup((
		typo : (
			font-size : 12px
		),
		sizes : (
			small : 0.5,
			big : 1.5
		)
));
// this mixin can be called as many times as you need
// this allows you to separate your configs setup into multiple
// files...

```


