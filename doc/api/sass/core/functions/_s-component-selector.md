


-----------------------------
## API
-----------------------------

### s-component-selector({String} $element = null, {String} $modifier = null, {String} $state = null, {String} $modifierName = null, {String} $method = null) : {String}
Return the css class selector for the current component setted by the [core/mixins/_s-component.scss] mixin
and build with the passed arguments.
This function generate the class selector depending of the settings.selector.method setting or the selector method setted by the [s-selector-method mixin](../mixins/_s-selector-method.scss)

- Privacy : **Public**

- Return : **{String}** : The generated class selector

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
$element | **{String}** | The element name of the class selector | '&' if target the same element like `&#{s-component-selector('&', null)} {}` | optional | null
$modifier | **{String}** | The modifier name of the class selector | optional | null
$state | **{String}** | The state name of the class selector | optional | null
$modifierName | **{String}** | The modifier name that will be used for webcomponent method like [$modifierName="$modifier"] | optional | null
$method | **{String}** | The method wanted to generate the selector. [See here](../_selector-methods.scss) | optional | null


#### Sample
```scss
\@incluse s-component('my-component') {
		// if settings.selector.method === 'BEM'
		s-component-selector('item') // => '.my-component__item'
		s-component-selector(null, 'red') // => '.my-component--red'
		s-component-selector('coco',null,'active') // => '.my-component__coco--active'
		// if setting.selector.method === 'SMACCS'
		s-component-selector('item') // => '.my-component-item'
		s-component-selector(null, 'red') // => '.my-component-red'
		s-component-selector('coco',null,'active') // => '.my-component-coco.is-active'
}

// if target the same element with & :
\@include s-component('my-component') {
		#{s-component-selector(null, red, null, 'color')} {
			&#{s-component-selector('&', null, 'active')} {
				// something here...
			}
		}
}

```


