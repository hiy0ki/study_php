# php playground


## How to use
1. $ cp composer.json_template composer.json
1. add library if you want to use someone.
1. $ composer install
1. $ composer dump-autoload
1. add following passage to your php file.

```
require_once __DIR__ . "/../vendor/autoload.php";
```
