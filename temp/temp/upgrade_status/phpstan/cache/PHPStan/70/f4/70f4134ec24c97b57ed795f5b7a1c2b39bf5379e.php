<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:5:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:58:"Defines an interface for entity field storage definitions.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:817:"Field storage definitions represent the part of full field definitions (see
FieldDefinitionInterface) that is responsible for defining how the field is
stored. While field definitions may differ by entity bundle, all of those
bundle fields have to share the same common field storage definition. Thus,
the storage definitions can be defined by entity type only.
The bundle fields corresponding to a field storage definition may provide
additional information; e.g., they may provide bundle-specific settings or
constraints that are not present in the storage definition. However bundle
fields may not override or alter any information provided by the storage
definition except for the label and the description; e.g., any constraints
and settings on the storage definition must be present on the bundle field as
well.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:32:"hook_entity_field_storage_info()";}}}}',
));