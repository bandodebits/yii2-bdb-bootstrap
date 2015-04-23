Bootstrap
=========
Bootstrap

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bdb/yii2-bdb-bootstrap "*"
```

or add

```
"bdb/yii2-bdb-bootstrap": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \bdb\bootstrap\Modal::widget(); ?>```