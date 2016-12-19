


-----------------------------
## API
-----------------------------

### s-selector({String} $block, {String} $element = null, {String} $modifier = null, {String} $state = null, {String} $modifierName = null, {String} $method = BEM) : {String}
Return a selector builded with the params passed, depending on the settings.selector.method base setting.

- Privacy : **Public**

- Return : **{String}** : The generated class selector

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$block | **{String}** | The block part of the selector | required | 
$element | **{String}** | The element part of the selector | optional | null
$modifier | **{String}** | The modifier part of the selector | optional | null
$state | **{String}** | The state part of the selector | optional | null
$modifierName | **{String}** | The modifier name that will be used for webcomponent method like [$modifierName="$modifier"] | optional | null
$method | **{String}** | The method used to build the selector (BEM or SMACCS) | optional | BEM


#### Sample
```scss
s-selector(my-component, item, null, active, null, BEM); // => .my-component__item--active
s-selector(my-component, item, null, active, null, SMACCS); // => .my-component-item.is-active

```


