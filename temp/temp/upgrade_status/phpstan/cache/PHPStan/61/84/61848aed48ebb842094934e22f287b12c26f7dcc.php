<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:6:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:73:"Retrieve all HTML restrictions (tags and attributes) for the text format.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:329:"Note that restrictions applied to the "*" tag (the wildcard tag, i.e. all
tags) are treated just like any other HTML tag. That means that any
restrictions applied to it are not automatically applied to all other tags.
It is up to the caller to handle this in whatever way it sees fit; this way
no information granularity is lost.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":1:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"array";}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"false";}}}s:11:"description";s:0:"";}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:329:"A structured array as returned by FilterInterface::getHTMLRestrictions(),
but with the intersection of all filters in this text format.
Will either indicate blacklisting of tags or whitelisting of tags. In
the latter case, it\'s possible that restrictions on attributes are also
stored. FALSE means there are no HTML restrictions.";}}}',
));