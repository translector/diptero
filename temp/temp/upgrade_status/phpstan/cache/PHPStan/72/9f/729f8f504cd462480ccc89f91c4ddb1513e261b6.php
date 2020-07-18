<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:6:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:66:"Defines an interface for classes which determine the active theme.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:76:"To set the active theme, create a new service tagged with \'theme_negotiator\'";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:137:"(see the theme.negotiator.admin_theme service in user.services.yml for an
example). Your service class needs to implement this interface.";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:462:"If you are setting a theme which is closely tied to the functionality of a
particular page or set of pages (such that the page might not function
correctly if a different theme is used), make sure to set the priority on
the service to a high number so that it is not accidentally overridden by
other theme negotiators. By convention, a priority of "1000" is used in
these cases; see \\Drupal\\Core\\Theme\\AjaxBasePageNegotiator and
core.services.yml for an example.";}}}',
));