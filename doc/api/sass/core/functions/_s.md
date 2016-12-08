


-----------------------------
## API
-----------------------------

### s()
Generic sugar function can return multiple settings types like:
- any settings : s('settings.{path}')
- look and feel : s('look-and-feel.{property}', $size)
 	- s('lnf.{property}', $size)
- space : s('space.{size}')
- color : s('color.{name}', $modifier)
- transition : s('transition.{name}')
- filter : s('filter.{name}')

- Privacy : **Public**




#### Sample
```scss
$my-color : s('color.primary');
$my-transition : s('transition.fast');
$my-font-size : s('settings.typo.font.size')
// etc...

```


