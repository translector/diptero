<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:6:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:69:"Checks that the library does not bypass Paragraphs type restrictions.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:302:"A common usecase is to have a "From library" Paragraphs type with an entity
reference field to Paragraphs library items.
The Paragraphs type of library item that the "From library" Paragraph
references must be allowed in the field that holds "From library" Paragraph,
if that field has this constraint.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:11:"@Constraint";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:204:"(
id = "ParagraphsLibraryItemHasAllowedParagraphsType",
label = @Translation("Paragraphs type of Paragraphs library item\'s root is allowed in the parent field.", context = "Validation"),
type = {"entity"}";}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:1:")";}}}',
));