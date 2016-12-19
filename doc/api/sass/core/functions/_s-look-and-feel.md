


-----------------------------
## API
-----------------------------

### s-look-and-feel({String} $name, {String} $size = default) : {Number}
Return a settings.look-and-feel stack value

- Privacy : **Public**

- Return : **{Number}** : The look and feel value in em

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$name | **{String}** | The look and feel value name | required | 
$size | **{String}** | The size wanted. | optional | default


#### Sample
```scss
.my-cool-element {
		padding : s-look-and-feel(padding-horizontal) s-look-and-feel(padding-vertical);
}

```


