# CODASHOP API
 check username by game ID from Codashop
 
Installation
------------
```
composer require namdevel/codashop
```
Game code list
------------
```php
use Namdevel\Codashop;
require(__DIR__ . '/vendor/autoload.php');

echo $app->gameList();
```
Check Username by Game ID
------------
```php
use Namdevel\Codashop;
require(__DIR__ . '/vendor/autoload.php');

echo $app->checkUser('MOBILE_LEGENDS', <USER_ID>, <ZONE_ID>);
```
License
------------

This open-source software is distributed under the MIT License. See LICENSE.md

Contributing
------------

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

* Send feedbacks.
* Submit bug reports.
* Write/Edit the documents.
* Fix bugs or add new features.
