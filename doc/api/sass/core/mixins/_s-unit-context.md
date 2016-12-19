


-----------------------------
## API
-----------------------------

### @mixin({String} $unit)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$unit | **{String}** | The unit wanted | required | 


#### Sample
```scss
// if settings.typo.font-size == 16px
s-setting('typo.font-size'); // => 16px
\@incluse s-unit-context(rem) {
		s-setting('typo.font-size'); // => 1rem
}

```


