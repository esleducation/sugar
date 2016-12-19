# STemplate <span class="s-smaller-rel">extends { SOject }</span>
This class allows you to create complexe and dynamic templates that will stay
in sync with his data object automatically.
Under the hood, this class use the `morphdom` library that will be in charge of updating
the minimum dom as needed.


- Extends **{ SOject }**
- Author **Olivier Bossel <olivier.bossel@gmail.com>**

#### Sample
```js
// our data object
const data = {
		title : 'Hello World'
};
// create an STemplate instance
const myTemplate = new STemplate(`
		<div class="my-template">
  		<h1>{{title}}</h1>
		</div>
`, data);
// append our template to the dom
myTemplate.appendTo(document.querySelector('#myDiv'));
// update the title at any point in time
setTimeout(() => {
		data.title = 'Hello Universe';
}, 2000);


```

-----------------------------
## Settings
-----------------------------

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> } compile = null
A compile function to process the template
This function will revieve the template and the data as parameters
and need to return the compiled string version

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> } onDataUpdate
Function called when a data is updated with his new and old value as parameter

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> } onBeforeElUpdated = null
Function called before any HTMLElement will be updated in the dom
If this function return false, the element will not bein updated at all

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> } onBeforeElChildrenUpdated = null
Function called before any HTMLElement child will be updated in the dom
If this function return false, the engine will not try to update this element children

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> } onBeforeElDiscarded = null
Function called before any HTMLElement will be removed from the dom
If this function return false, the element will not bein removed

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function" target="_blank" title="Function">Function</a> } onElDiscarded
Function called after any HTMLElement has been removed from the dom

-----------------------------
## Properties
-----------------------------

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } templateId
Store a uniqid that will be used as identifier for
this particular class in the window.sTemplateClasses

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> } refs
Store the reference to html elements that have an id or a name

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> } data
Store the data object used to render the template

### { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> } settings
Store the settings

-----------------------------
## API
-----------------------------

### static getParentTemplate({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } of) : { [STemplate](/data/web/sugar/src/js/core/STemplate.js) }
Get the parent template instance
- Privacy : **Public**
- **Static**
- Return : **{ [STemplate](/data/web/sugar/src/js/core/STemplate.js) }** : The parent template instance found in the html

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
of | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | The element to get the parent template from | required | 


### domNode()
Store the reference to the created dom structure
- Privacy : **Public**




### beforeCompile({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } template) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }
Function that runs before the template will be compiled so that you can have a change to process it if needed
before it will be passed to the compile step
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** : The processed template to pass to compilation step

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
template | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The template before compilation | required | 


### afterCompile({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } ) : {String|HTMLElement}
Function that runs after the template has been compiled so that you can have a chance to process it if needed
before that the dom will be updated
- Privacy : **Public**

- Return : **{String|HTMLElement}** : The processed template

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
 | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | compiledTemplate | required | 


### beforeRender({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } template) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }
Function that runs before the template will be rendered in the dom so that you can have a change to process it if needed
before it will be passed to the render step
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** : The processed template to pass to render step

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
template | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The template before compilation | required | 


### afterRender({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } )
Function that runs after the template has been rendered to the dom so that you can have a chance to process it if needed
- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
 | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | inDomTemplate | required | 


### constructor()
Constructor
- Privacy : **Public**




### isNodeBelongToMe({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } node) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Boolean" target="_blank" title="Boolean">Boolean</a> }
Check if the passed node is part of this template
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Boolean" target="_blank" title="Boolean">Boolean</a> }** : True if part of this template, false if not

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
node | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | The node to test | required | 


### setDomNode({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } node)
Set the dom node in which to render the template
- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
node | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | The node that will represent the template | required | 


### setParentTemplate({ [STemplate](/data/web/sugar/src/js/core/STemplate.js) } template)
Set the parent STemplate instance.
This is needed if you want your template to talk together through attributes
- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
template | **{ [STemplate](/data/web/sugar/src/js/core/STemplate.js) }** | The parent template instance | required | 


### _compile({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } template, { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> } data) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }
Compile the template
- Privacy : **Protected**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** : The compiled template string

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
template | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The template to compile | required | 
data | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object" target="_blank" title="Object">Object</a> }** | The data used to compile the template | required | 


### render()
Render the template
Usually, you don't need to call this by yourself. The template
will be rendered again each time that a data is updated
- Privacy : **Public**




### patchDom({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> } template) : { <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }
Patch the dom with the passed template string
- Privacy : **Public**

- Return : **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** : The HTMLElement that represent the template in the dom

Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
template | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String" target="_blank" title="String">String</a> }** | The template to use to patch the dom | required | 


### appendTo({ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> } to)
Append the template to an HTMLElement
- Privacy : **Public**



Name | Type | Description | Status | Default
------------ | ------------ | ------------ | ------------ | ------------
to | **{ <a class="link" href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement" target="_blank" title="HTMLElement">HTMLElement</a> }** | The element in which to append the template | required | 


### remove()
Remove the template from the dom
- Privacy : **Public**




### destroy()
Destroy the template
- Privacy : **Public**





