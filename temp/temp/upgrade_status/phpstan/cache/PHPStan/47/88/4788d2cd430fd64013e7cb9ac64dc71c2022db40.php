<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:7:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:1350:"This method add the files / directories listed in $p_filelist at the
end of the existing archive. If the archive does not yet exists it
is created.
The $p_filelist parameter can be an array of string, each string
representing a filename or a directory name with their path if
needed. It can also be a single string with names separated by a
single blank.
The path indicated in $p_remove_dir will be removed from the
memorized path of each file / directory listed when this path
exists. By default nothing is removed (empty path \'\')
The path indicated in $p_add_dir will be added at the beginning of
the memorized path of each file / directory listed. However it can
be set to empty \'\'. The adding of a path is done after the removing
of path.
The path add/remove ability enables the user to prepare an archive
for extraction in a different path than the origin files are.
If a file/dir is already in the archive it will only be added at the
end of the archive. There is no update of the existing archived
file/dir. However while extracting the archive, the last file will
replace the first one. This results in a none optimization of the
archive size.
If a file/dir does not exist the file/dir is ignored. However an
error text is send to PEAR error.
If a file/dir is not readable the file/dir is ignored. However an
error text is send to PEAR error.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"array";}s:10:"isVariadic";b:0;s:13:"parameterName";s:11:"$p_filelist";s:11:"description";s:107:"An array of filenames and directory
names, or a single string with names
separated by a single blank space.";}}i:3;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:6:"string";}s:10:"isVariadic";b:0;s:13:"parameterName";s:10:"$p_add_dir";s:11:"description";s:93:"A string which contains a path to be
added to the memorized path of each
element in the list.";}}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:6:"string";}s:10:"isVariadic";b:0;s:13:"parameterName";s:13:"$p_remove_dir";s:11:"description";s:112:"A string which contains a path to be
removed from the memorized path of
each element in the list, when
relevant.";}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:4:"true";}s:11:"description";s:27:"on success, false on error.";}}}}',
));