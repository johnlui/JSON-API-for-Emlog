TinyLara\TinyValidator
=====
[![Latest Stable Version](https://poser.pugx.org/tinylara/tinyvalidator/v/stable.svg)](https://packagist.org/packages/tinylara/tinyvalidator) [![Total Downloads](https://poser.pugx.org/tinylara/tinyvalidator/downloads.svg)](https://packagist.org/packages/tinylara/tinyvalidator) [![License](https://poser.pugx.org/tinylara/tinyvalidator/license.svg)](https://packagist.org/packages/tinylara/tinyvalidator)

TinyValidator is a tiny validation package. [Read the documentation.](https://github.com/TinyLara/TinyLara/wiki/Validation)

### Install

If you have Composer, just include TinyValidator as a project dependency in your `composer.json`. If you don't just install it by downloading the .ZIP file and extracting it to your project directory.

```json
require: {
    "tinylara/tinyvalidator": "*"
}
```

### Examples

```php
$data = ['title'=>'你', 'email'=>'1@baiducom'];
$rules = [
  'title' => 'required|min:3|max:255',
  'email' => 'required|email',
];

$validator = new \TinyLara\TinyValidator\TinyValidator($data, $rules);

if ( !$validator->success ) {
  foreach ($validator->errors as $error) {
    echo $error.'<br>';
  }
}
```

### License

The TinyValidator is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
