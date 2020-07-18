<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:9:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:40:"Utility base class for thin controllers.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:552:"Controllers that use this base class have access to a number of utility
methods and to the Container, which can greatly reduce boilerplate dependency
handling code.  However, it also makes the class considerably more
difficult to unit test. Therefore this base class should only be used by
controller classes that contain only trivial glue code.  Controllers that
contain sufficiently complex logic that it\'s worth testing should not use
this base class but use ContainerInjectionInterface instead, or even
better be refactored to be trivial glue code.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:227:"The services exposed here are those that it is reasonable for a well-behaved
controller to leverage. A controller that needs other services may
need to be refactored into a thin controller and a dependent unit-testable
service.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:60:"\\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface";}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:8:"@ingroup";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:7:"routing";}}}}',
));