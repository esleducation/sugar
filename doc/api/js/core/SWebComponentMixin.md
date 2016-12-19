

-----------------------------
## Properties
-----------------------------

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> } props
Store all the props of the component
Props are actual computed props with attributes

-----------------------------
## API
-----------------------------

### static define({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } name, { [SWebComponent](/data/web/sugar/src/js/core/SWebComponent.js) } component)
Define the new web component
- Privacy : **Public**
- **Static**


Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
name | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The name of the component | required | 
component | **{ [SWebComponent](/data/web/sugar/src/js/core/SWebComponent.js) }** | The component class | required | 


### static get()
Return the default props for the component.
Need to take care of the passed props parameter and mix it at the
end of your default props

- Privacy : **Public**
- **Static**



#### Sample
```js
getDefaultProps(props = {}) {
		return super.getDefaultProps({
			myCoolProp : null,
			...props
		});
}

```

### get() : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }
Get the default props for this particular instance
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }** : The default props


### static get()
Return an array of props to set on the dom
- Privacy : **Public**
- **Static**



### get() : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }
Get physical props for this particular instance
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }** : The physical props array


### static get()
Return an array of required props to init the component
- Privacy : **Public**
- **Static**



### get() : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array" target="_blank" title="Array">Array</a> }
Get the required props array for this particular instance
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array" target="_blank" title="Array">Array</a> }** : An array of required props


### static css()
Component css
- Privacy : **Public**
- **Static**



### static get()
Return an array of props to set on the dom
- Privacy : **Public**
- **Static**



### get() : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }
Get physical props for this particular instance
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }** : The physical props array


### componentWillMount()
Method called before the component will be added in the dom.
You will not have access to the siblings, etc here.
This is the place to init your component, just like a constructor

- Privacy : **Public**




#### Sample
```js
componentWillMount() {
		// call parent method
		super.componentWillMount();
		// do something here...
}

```

### componentMount()
Method called right after that the component has been added in the dom,
and before the initial render
This is the first place where you will have access to the dom.

- Privacy : **Public**




#### Sample
```js
componentMount() {
		// call parent method
		super.componentMount();
		// do something here...
}

```

### componentDidMount()
Method called after the initial component render

- Privacy : **Public**




#### Sample
```js
componentDidMount() {
		// call parent method
		super.componentDidMount();
		// do something here...
}

```

### componentWillUpdate({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> } nextProps, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array" target="_blank" title="Array">Array</a> } nextPropsArray)

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
nextProps | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }** | An object that represent the props that have been updated | required | 
nextPropsArray | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array" target="_blank" title="Array">Array</a> }** | An array representation of the nextProps object [{name:...,value:...}] | required | 


#### Sample
```js
componentWillUpdate() {
		// call parent method
		super.componentWillUpdate();
		// do something here...
}

```

### render()
Apply all the updated that you need in the dom for the component to reflect the props

- Privacy : **Public**




#### Sample
```js
render() {
		// call the parent method
		super.render();
		// apply some classes, properties, styles, etc... in the dom
		// in order to reflect the props object state
}

```

### createdCallback()
When the component is created
- Privacy : **Public**




### attachedCallback()
When the element is attached
- Privacy : **Public**




### detachedCallback()
When the component is detached
- Privacy : **Public**




### attributeChangedCallback()
When any of the component attribute changes
- Privacy : **Public**




### dispatchComponentEvent({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } name, { Mixed } data)
Dispatch an event from the tag with namespaced event name
This will dispatch actually two events :
1. {tagName}.{name} : example : s-datepicker.change
2. {name} 		   : example : change

- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
name | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The event name | required | 
data | **{ Mixed }** | Some data to attach to the event | required | 


### setProps()
Set properties
- Privacy : **Public**




### setProp()
Set a property
- Privacy : **Public**




### isComponentMounted() : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Boolean" target="_blank" title="Boolean">Boolean</a> }
Check if component is mounted
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Boolean" target="_blank" title="Boolean">Boolean</a> }** : true if mounted, false if not


### mutate({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> } cb)
Mutate the dom using an optimize requestAnimationFrame technique
- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
cb | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> }** | The callback to exexute | required | 


### componentClassName({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } element = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } modifier = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } state = null) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }
componentClassName
Set a class that will be construct with the componentNameDash,
an optional element and modifier
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** : The generated class

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
element | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The element name | optional | null
modifier | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The modifier name | optional | null
state | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The state name | optional | null


### componentSelector({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } element = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } modifier = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } state = null) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }
Get a component selector class built with the passed element, modifier and state parameters
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** : The generated class

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
element | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The element name | optional | null
modifier | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The modifier name | optional | null
state | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The state name | optional | null


### hasComponentClass({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } elm, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } element = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } modifier = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } state = null) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Boolean" target="_blank" title="Boolean">Boolean</a> }
hasComponentClass
Check if the passed element has the component class generated by the element and modifier argument
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Boolean" target="_blank" title="Boolean">Boolean</a> }** : The check result

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
elm | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | The element to check | required | 
element | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The element name | optional | null
modifier | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The modifier name | optional | null
state | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The state name | optional | null


### addComponentClass({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } element = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } modifier = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } state = null) : { [SComponent](/data/web/sugar/src/js/core/SComponent.js) }}
Add a class on the passed element that will be construct with the componentNameDash,
an optional element, modifier and state
- Privacy : **Public**

- Return : **{ [SComponent](/data/web/sugar/src/js/core/SComponent.js) }}** : The component itself

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
element | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The element name | optional | null
modifier | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The modifier name | optional | null
state | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The state name | optional | null


### removeComponentClass({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } element = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } modifier = null, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } state = null) : { [SComponent](/data/web/sugar/src/js/core/SComponent.js) }}
Remove a class on the passed element that will be construct with the componentNameDash,
an optional element, modifier and state
- Privacy : **Public**

- Return : **{ [SComponent](/data/web/sugar/src/js/core/SComponent.js) }}** : The component itself

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
element | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The element name | optional | null
modifier | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The modifier name | optional | null
state | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The state name | optional | null



