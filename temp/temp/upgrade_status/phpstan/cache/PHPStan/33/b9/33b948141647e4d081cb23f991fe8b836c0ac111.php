<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:18:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:67:"Strips dangerous protocols (for example, \'javascript:\') from a URI.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:500:"This function must be called for all URIs within user-entered input prior
to being output to an HTML attribute value. It is often called as part of
\\Drupal\\Component\\Utility\\UrlHelper::filterBadProtocol() or
\\Drupal\\Component\\Utility\\Xss::filter(), but those functions return an
HTML-encoded string, so this function can be called independently when the
output needs to be a plain-text string for passing to functions that will
call Html::escape() separately. The exact behavior depends on the value:";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:120:"- If the value is a well-formed (per RFC 3986) relative URL or
absolute URL that does not use a dangerous protocol (like";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:130:""javascript:"), then the URL remains unchanged. This includes all
URLs generated via Url::toString() and UrlGeneratorTrait::url().";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:189:"- If the value is a well-formed absolute URL with a dangerous protocol,
the protocol is stripped. This process is repeated on the remaining URL
until it is stripped down to a safe protocol.";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:526:"- If the value is not a well-formed URL, the same sanitization behavior as
for well-formed URLs will be invoked, which strips most substrings that
precede a ":". The result can be used in URL attributes such as "href"
or "src" (only after calling Html::escape() separately), but this may not
produce valid HTML (for example, malformed URLs within "href" attributes
fail HTML validation). This can be avoided by using
Url::fromUri($possibly_not_a_url)->toString(), which either throws an
exception or returns a well-formed URL.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:6:"string";}s:10:"isVariadic";b:0;s:13:"parameterName";s:4:"$uri";s:11:"description";s:0:"";}}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:56:"A plain-text URI that might contain dangerous protocols.";}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:11;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:6:"string";}s:11:"description";s:0:"";}}i:12;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:234:"A plain-text URI stripped of dangerous protocols. As with all plain-text
strings, this return value must not be output to an HTML page without
being sanitized first. However, it can be passed to functions
expecting plain-text strings.";}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:14;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:40:"\\Drupal\\Component\\Utility\\Html::escape()";}}i:15;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:28:"\\Drupal\\Core\\Url::toString()";}}i:16;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:45:"\\Drupal\\Core\\Routing\\UrlGeneratorTrait::url()";}}i:17;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:27:"\\Drupal\\Core\\Url::fromUri()";}}}}',
));