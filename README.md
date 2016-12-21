# Html
Object oriented tool for building HTML documents.

Requirements
============
Requires PHP 5.6.0 or higher.


Installation
=============

The best way to install valerian/html is using  [Composer](http://getcomposer.org/):

```sh
$ composer require valerian/html
```

Getting Started
===============

Html
```php
$element = (new Valerian\Html\Html())
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
    ->addChild(...)
echo (string) $element;
```

Output:
```html
<html class="foo" id="bar"></html>
```

Body
```php
$element = (new Valerian\Html\Body())
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
    ->addChild(...)
echo (string) $element;
```

Output:
```html
<body class="foo" id="bar"></body>
```

Div
```php
$element = (new Valerian\Html\Div())
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
    ->addChild(...)
echo (string) $element;
```

Output:
```html
<div class="foo" id="bar"></div>
```

Span
```php
$element = (new Valerian\Html\Span())
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
    ->addChild(...)
echo (string) $element;
```

Output:
```html
<span class="foo" id="bar"></span>
```

Paragraph
```php
$element = (new Valerian\Html\Paragraph())
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
    ->addChild(...)
echo (string) $element;
```

Output:
```html
<p class="foo" id="bar"></p>
```

Image
```php
$element = (new Valerian\Html\Img('image url'))
    ->alt('alt text')
    ->width(100)
    ->height(200)
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
echo (string) $element;
```

Output:
```html
<img src="image url" alt="alt text" width="100" height="200" class="foo" id="bar">
```

Input
```php
$input = (new Valerian\Html\Input('text', 'foo'))
    ->value('bar')
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
echo (string) $input;
```

Output:
```html
<input type="text" name="foo" value="bar" class="foo" id="bar">
```

Select
```php
$select = (new Valerian\Html\Select('foo'))
    ->addOption(
        (new \Valerian\Html\SelectOption(1, 'Option 1'))
            ->disabled('disabed')
    )
    ->addOption(
        (new \Valerian\Html\SelectOption(2, 'Option 2'))
    )
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
echo (string) $select;
```

Output:
```html
<select name="foo" value="bar" class="foo" id="bar">
    <option value="1" disabled="disabed">Option 1</option>
    <option value="2">Option 2</option>
</select>
```

Form
```php
$input = (new Valerian\Html\Form('#'))
    ->method('GET')
    ->attribute('class', 'foo')
    ->attribute('id', 'bar')
    ->addChild($input)
    ->addChild($select)
echo (string) $input;
```

Output:
```html
<form action="#" method="GET" class="foo" id="bar">
    <input type="text" name="foo" value="bar" class="foo" id="bar">
    <select name="foo" value="bar" class="foo" id="bar">
        <option value="1" disabled="disabed">Option 1</option>
        <option value="2">Option 2</option>
    </select>
</form>
```