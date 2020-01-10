# Resource loader

Resource loader is Codeigniter 3 helper for easier assets load.

You can also:
  - Dynamicly load assets in view
  - Single load, specific or multiple load of diffrent assets
  - Group loading by alias name
  - Media support (video & audio)
  - Support for object and embed 

Resource loader is project inspired by *headache* of having multiple spam lines of html in php code where you need to include assets from distant folder.  **Resource loader fixes that problem.** 

### Installation

Resource loader library requires PHP minimal 5.6.x to work and CodeIgniter 3.x version

To load this library manualy place 

```sh
resource_loader_helper.php 
```
in 
```sh
application/helpers
```
Also put 
```sh
helper_config.php
``` 
in
```sh
application/config
```
Set own config values in resource_loader.php

To load library in project you can use CI autoload 
```php
$autoload['helper'] = array('resource_loader');
```
or load it manually

```php
$this->load->helper('resource_loader');
```
### Examples
See all [examples]() of usage .

[Normal assets load](#jmp1)
Note: edit config values to use this type of functions.

```php
echo rl_favicon('test.ico');
```
will produce 
```html
<link rel="icon" type="image/x-icon" href="http://banlist/assets/img/test.ico">
```

[Single assets load](#jmp1)

```php
echo rl_load('assets/css/css.css', 'css');
```
will produce 
```html
<link rel="stylesheet" type="text/css" href="http://banlist/assets/css/css/css.css" >
```

[Multiple load](#jmp1)
```php
echo rl_img(['code.jpg', ['test' => '123']],['code.jpg', ['test' => '456']]);
```
will produce 
```html
<img src="http://banlist/assets/img/code.jpg" test="123"  />
<img src="http://banlist/assets/img/code.jpg" test="456"  />    
```

[Group load](#jmp1)
Group loading is specific feature and it needs to be enabled in resource_loader.php config file.
See example page for more informations. 

### Todos

 - Add library to [Splint](https://splint.cynobit.com/)

### Development

Want to contribute? Great!
Open pull request with your changes or report bugs in issues.