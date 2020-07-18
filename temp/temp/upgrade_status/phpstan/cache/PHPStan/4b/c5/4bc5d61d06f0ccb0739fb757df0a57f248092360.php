<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:9:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:64:"Provides a value object to model an element in a menu link tree.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:201:"\\Drupal\\Core\\Menu\\MenuLinkTreeElement objects represent a menu link\'s data.
Objects of this class provide complimentary data: the placement in a tree.
Therefore, we can summarize this split as follows:";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:166:"- Menu link objects contain all information about an individual menu link,
plus what their parent is. But they don\'t know where exactly in a menu link
tree they live.";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:72:"- Instances of this class are complimentary to those objects, they know:";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:198:"- All additional metadata from {menu_tree}, which contains "materialized"
metadata about a menu link tree, such as whether a link in the tree has
visible children and the depth relative to the root.";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:275:"- Plus all additional metadata that\'s adjusted for the current tree query,
such as whether the link is in the active trail, whether the link is
accessible for the current user, and the link\'s children (which are only
loaded if the link was marked as "expanded" by the query).";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:49:"\\Drupal\\Core\\Menu\\MenuTreeStorage::loadTreeData()";}}}}',
));