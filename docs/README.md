#  CakePHP IdeHelper Plugin Documentation

Note that freshly [baking](https://github.com/cakephp/bake) your code will result in similar results,
but often times there is already existing code, and re-baking it is not an option.

## Controllers
All controllers should at least annotate their primary model.

```
bin/cake annotation controllers
```

### Primary model via convention
```php
<?php
namespace App\Controller;

class ApplesController extends AppController {
}
```
becomes
```php
<?php
namespace App\Controller;

/**
 * @property \App\Model\Table\ApplesTable \$Apples
 */
class ApplesController extends AppController {
}
```
You get autocompletion on any `$this->Apples->...()` usage in your controllers then.

### Primary model via $modelClass definition
When defining `$modelClass` it will be used instead:
```php
<?php
namespace App\Controller;

/**
 * @property \App\Model\Table\MyApplesTable \$MyApples
 */
class ApplesController extends AppController {
	
	public $modelClass = 'MyApples';
}
```

### Tables
Tables should annotate their relations.

//TODO


### Entities
Entities should annotate their fields and relations.

//TODO

### Shells
Shells should annotate their primary model at least.

//TODO


### Helpers
Helpers should annotate any helper they use.

//TODO

### Templates
Templates should have a `/** @var \App\View\AppView $this */` added on top if they use any helper or access the request object.

//TODO