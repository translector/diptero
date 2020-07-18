<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:10:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:26:"Gets an array of handlers.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"array";}s:11:"description";s:0:"";}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:164:"An associative array where the keys are the names of different handler
types (listed below) and the values are the names of the classes that
implement that handler:";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:127:"- storage: The name of the class used to load the objects. The class must
implement \\Drupal\\Core\\Entity\\EntityStorageInterface.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:432:"- form: An associative array where the keys are the names of the
different form operations (such as \'create\', \'edit\', or \'delete\') and
the values are the names of the handler classes for those
operations. The name of the operation is passed also to the form
handler\'s constructor, so that one class can be used for multiple
entity forms when the forms are similar. The classes must implement
\\Drupal\\Core\\Entity\\EntityFormInterface.";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:142:"- list: The name of the class that provides listings of the entities. The
class must implement \\Drupal\\Core\\Entity\\EntityListBuilderInterface.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:141:"- render: The name of the class that is used to render the entities. The
class must implement \\Drupal\\Core\\Entity\\EntityViewBuilderInterface.";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:205:"- access: The name of the class that is used for access checks. The class
must implement \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface.
Defaults to \\Drupal\\Core\\Entity\\EntityAccessControlHandler.";}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:228:"- route_provider: (optional) A list of class names, keyed by a group
string, which will be used to define routes related to this entity
type. These classes must implement
\\Drupal\\Core\\Entity\\Routing\\EntityRouteProviderInterface.";}}}',
));