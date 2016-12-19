


-----------------------------
## API
-----------------------------

### s-lnf({String} $name, {String} $size = default) : {Number}
Alias to the [./_s-look-and-feel.scss] function

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
		padding : s-lnf(padding-horizontal) s-lnf(padding-vertical);
}

```


