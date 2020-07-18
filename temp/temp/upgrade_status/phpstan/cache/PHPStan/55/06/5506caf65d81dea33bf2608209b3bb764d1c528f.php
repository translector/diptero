<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:37:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:72:"Provides a form element for a drop-down menu or scrolling selection box.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:11:"Properties:";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:184:"- #options: An associative array of options for the select. Do not use
placeholders that sanitize data in any labels, as doing so will lead to
double-escaping. Each array value can be:";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:366:"- A single translated string representing an HTML option element, where
the outer array key is the option value and the translated string array
value is the option label. The option value will be visible in the HTML
and can be modified by malicious users, so it should not contain
sensitive information and should be treated as possibly malicious data in
processing.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:312:"- An array representing an HTML optgroup element. The outer array key
should be a translated string, and is used as the label for the group.
The inner array contains the options for the group (with the keys as
option values, and translated string values as option labels). Nesting
option groups is not supported.";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:253:"- An object with an \'option\' property. In this case, the outer array key
is ignored, and the contents of the \'option\' property are interpreted as
an array of options to be merged with any other regular options and
option groups found in the outer array.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:195:"- #sort_options: (optional) If set to TRUE (default is FALSE), sort the
options by their labels, after rendering and translation is complete.
Can be set within an option group to sort that group.";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:318:"- #sort_start: (optional) Option index to start sorting at, where 0 is the
first option. Can be used within an option group. If an empty option is
being added automatically (see #empty_option and #empty_value properties),
this defaults to 1 to keep the empty option at the top of the list.
Otherwise, it defaults to 0.";}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:193:"- #empty_option: (optional) The label to show for the first default option.
By default, the label is automatically set to "- Select -" for a required
field and "- None -" for an optional field.";}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:136:"- #empty_value: (optional) The value for the first default option, which is
used to determine whether the user submitted a value or not.";}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:62:"- If #required is TRUE, this defaults to \'\' (an empty string).";}i:12;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:352:"- If #required is not TRUE and this value isn\'t set, then no extra option
is added to the select control, leaving the control in a slightly
illogical state, because there\'s no way for the user to select nothing,
since all user agents automatically preselect the first available
option. But people are used to this being the behavior of select
controls.";}i:13;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@todo";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:36:"Address the above issue in Drupal 8.";}}i:14;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:195:"- If #required is not TRUE and this value is set (most commonly to an
empty string), then an extra option (see #empty_option above)
representing a "non-selection" is added with this as its value.";}i:15;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:97:"- #multiple: (optional) Indicates whether one or more options can be
selected. Defaults to FALSE.";}i:16;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:243:"- #default_value: Must be NULL or not set in case there is no value for the
element yet, in which case a first default option is inserted by default.
Whether this first option is a valid option depends on whether the field
is #required or not.";}i:17;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:108:"- #required: (optional) Whether the user needs to select an option (TRUE)
or not (FALSE). Defaults to FALSE.";}i:18;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:75:"- #size: The number of rows in the list that should be visible at one time.";}i:19;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:20;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:14:"Usage example:";}i:21;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@code";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:0:"";}}i:22;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:27:"$form[\'example_select\'] = [";}i:23;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:20:"\'#type\' => \'select\',";}i:24;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:39:"\'#title\' => $this->t(\'Select element\'),";}i:25;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:15:"\'#options\' => [";}i:26;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:23:"\'1\' => $this->t(\'One\'),";}i:27;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:8:"\'2\' => [";}i:28;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:35:"\'2.1\' => $this->t(\'Two point one\'),";}i:29;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:35:"\'2.2\' => $this->t(\'Two point two\'),";}i:30;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:2:"],";}i:31;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:25:"\'3\' => $this->t(\'Three\'),";}i:32;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:2:"],";}i:33;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:2:"];";}i:34;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:8:"@endcode";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:0:"";}}i:35;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:36;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:12:"@FormElement";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:10:"("select")";}}}}',
));