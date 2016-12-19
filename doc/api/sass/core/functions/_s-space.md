


-----------------------------
## API
-----------------------------

### s-space({String} $size) : {Number}
Return a value interpolated from the settings.spaces stack

- Privacy : **Public**

- Return : **{Number}** : The actual space value

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$size | **{String}** | The space size wanted. Must exist in the settings.sizes stack | required | 


#### Sample
```scss
.my-cool-section {
		padding : s-pace(big);
}

```


