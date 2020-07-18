<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:7:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:61:"Implements transliteration without using the PECL extensions.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:118:"Transliterations are done character-by-character, by looking up non-US-ASCII
characters in a transliteration database.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:543:"The database comes from two types of files, both of which are searched for in
the PhpTransliteration::$dataDirectory directory. First, language-specific
overrides are searched (see PhpTransliteration::readLanguageOverrides()). If
there is no language-specific override for a character, the generic
transliteration character tables are searched (see
PhpTransliteration::readGenericData()). If looking up the character in the
generic table results in a NULL value, or an illegal character is
encountered, then a substitute character is returned.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:158:"Some parts of this code were derived from the MediaWiki project\'s UtfNormal
class, Copyright © 2004 Brion Vibber <brion@pobox.com>,
http://www.mediawiki.org/";}}}',
));