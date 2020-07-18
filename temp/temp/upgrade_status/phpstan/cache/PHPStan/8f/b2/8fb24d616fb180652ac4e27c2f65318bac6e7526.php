<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:12:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:29:"Gets an array of entity keys.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"array";}s:11:"description";s:0:"";}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:103:"An array describing how the Field API can extract certain information
from objects of this entity type:";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:173:"- id: The name of the property that contains the primary ID of the
entity. Every entity object passed to the Field API must have this
property and its value must be numeric.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:251:"- revision: (optional) The name of the property that contains the
revision ID of the entity. The Field API assumes that all revision IDs
are unique across all entities of a type. If this entry is omitted
the entities of this type are not revisionable.";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:400:"- bundle: (optional) The name of the property that contains the bundle
name for the entity. The bundle name defines which set of fields are
attached to the entity (e.g. what nodes call "content type"). This
entry can be omitted if this entity type exposes a single bundle (such
that all entities have the same collection of fields). The name of this
single bundle will be the same as the entity type.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:125:"- label: (optional) The name of the property that contains the entity
label. For example, if the entity\'s label is located in";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:168:"$entity->subject, then \'subject\' should be specified here. If complex
logic is required to build the label,
\\Drupal\\Core\\Entity\\EntityInterface::label() should be used.";}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:133:"- langcode: (optional) The name of the property that contains the
language code. For instance, if the entity\'s language is located in";}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:60:"$entity->langcode, then \'langcode\' should be specified here.";}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:179:"- uuid: (optional) The name of the property that contains the universally
unique identifier of the entity, which is used to distinctly identify
an entity across different systems.";}}}',
));