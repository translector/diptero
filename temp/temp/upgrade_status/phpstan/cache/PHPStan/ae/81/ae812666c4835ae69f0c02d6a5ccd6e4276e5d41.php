<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:5:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:43:"Provides access to configuration for forms.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:190:"This trait provides a config() method that returns override free and mutable
config objects if the configuration name is in the array returned by the
getEditableConfigNames() implementation.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:596:"Forms that present configuration to the user have to take care not to save
configuration overrides to the stored configuration since overrides are often
environment specific. Default values of form elements should be obtained from
override free configuration objects. However, if a form reacts to
configuration in any way, for example sends an email to the system.site:mail
address, then it is important that the value comes from a configuration
object with overrides. Therefore, override free and editable configuration
objects are limited to those listed by the getEditableConfigNames() method.";}}}',
));