Toggle On-Off
=============
this extend class of extension [pheme/yii2-toggle-column](https://github.com/phemellc/yii2-toggle-column) so we can change the color button. Please refer [pheme/yii2-toggle-column](https://github.com/phemellc/yii2-toggle-column) to more usage

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist elmanth/yii2-togel "*"
```

or add

```
"elmanth/yii2-togel": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, use this class to your column :

```php
[
    'class' => '\elmanth\togel\Togel',
    'action' => 'toggleArchive',
    
    'colorOn' => '#289AFC',
    'colorOff' => '#F89406',
    
    'attribute' => 'archive',
    'filter' => [1 => 'Ya', 0 => 'Tidak']
],
```