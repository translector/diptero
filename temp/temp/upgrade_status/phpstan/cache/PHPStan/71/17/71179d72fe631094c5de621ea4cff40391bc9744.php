<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:12:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:53:"Changes submitted form values during form validation.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:182:"Use this function to change the submitted value of a form element in a form
validation function, so that the changed value persists in $form_state
through to the submission handlers.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:315:"Note that form validation functions are specified in the \'#validate\'
component of the form array (the value of $form[\'#validate\'] is an array of
validation function names). If the form does not originate in your module,
you can implement hook_form_FORM_ID_alter() to add a validation function
to $form[\'#validate\'].";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"array";}s:10:"isVariadic";b:0;s:13:"parameterName";s:8:"$element";s:11:"description";s:0:"";}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:554:"The form element that should have its value updated; in most cases you
can just pass in the element from the $form array, although the only
component that is actually used is \'#parents\'. If constructing yourself,
set $element[\'#parents\'] to be an array giving the path through the form
array\'s keys to the element whose value you want to update. For instance,
if you want to update the value of $form[\'elem1\'][\'elem2\'], which should
be stored in $form_state->getValue(array(\'elem1\', \'elem2\')), you would
set $element[\'#parents\'] = array(\'elem1\',\'elem2\').";}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"mixed";}s:10:"isVariadic";b:0;s:13:"parameterName";s:6:"$value";s:11:"description";s:0:"";}}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:35:"The new value for the form element.";}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:11;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:42:"PHPStan\\PhpDocParser\\Ast\\Type\\ThisTypeNode":0:{}s:11:"description";s:0:"";}}}}',
));