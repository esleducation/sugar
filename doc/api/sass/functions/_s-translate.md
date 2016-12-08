


-----------------------------
## API
-----------------------------

### s-translate({Number} $x = 0, {Number} $y = 0, {Number} $z = 0) : {Map}
Return the Map properties representation of a translate x,y and z

- Privacy : **Public**

- Return : **{Map}** : The translate Map representation

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$x | **{Number}** | The x translate value | optional | 0
$y | **{Number}** | The y translate value | optional | 0
$z | **{Number}** | The z translate value | optional | 0


#### Sample
```scss
s-translate(10px,20px);
// return
// (
// 	transform: translateX(10px) translateY(20px) translateZ(0)
// )

```


