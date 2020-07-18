<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/finder/Finder.php-1581665661',
   'data' => 
  array (
    'bfb68ff91139920756c410bfaeba6f76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Finder allows to build rules to find files and directories.
 *
 * It is a thin wrapper around several specialized iterator classes.
 *
 * All rules may be invoked several times.
 *
 * All methods return the current Finder object to allow chaining:
 *
 *     $finder = Finder::create()->files()->name(\'*.php\')->in(__DIR__);
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e1c2f85b12b7d756b84cf65aac16b71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a new Finder.
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed75ee2e580abdd337c29025c56d2116' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Restricts the matching to directories only.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'directories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5cd05e2f77201022e46409544837f25c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Restricts the matching to files only.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'files',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eca5dbb84538a469e1bf680c61d97ca1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds tests for the directory depth.
     *
     * Usage:
     *
     *     $finder->depth(\'> 1\') // the Finder will start matching at level 1.
     *     $finder->depth(\'< 3\') // the Finder will descend at most 3 levels of directories below the starting point.
     *
     * @param string|int $level The depth level expression
     *
     * @return $this
     *
     * @see DepthRangeFilterIterator
     * @see NumberComparator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'depth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98160c0843071f7cf98fa4cc838c5b39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds tests for file dates (last modified).
     *
     * The date must be something that strtotime() is able to parse:
     *
     *     $finder->date(\'since yesterday\');
     *     $finder->date(\'until 2 days ago\');
     *     $finder->date(\'> now - 2 hours\');
     *     $finder->date(\'>= 2005-10-15\');
     *
     * @param string $date A date range string
     *
     * @return $this
     *
     * @see strtotime
     * @see DateRangeFilterIterator
     * @see DateComparator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'date',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16490327b7fc654586fdd60fb3fbb0fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds rules that files must match.
     *
     * You can use patterns (delimited with / sign), globs or simple strings.
     *
     *     $finder->name(\'*.php\')
     *     $finder->name(\'/\\.php$/\') // same as above
     *     $finder->name(\'test.php\')
     *
     * @param string $pattern A pattern (a regexp, a glob, or a string)
     *
     * @return $this
     *
     * @see FilenameFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'name',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e84f4a4aaa45cba20b75646cc3d6a20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds rules that files must not match.
     *
     * @param string $pattern A pattern (a regexp, a glob, or a string)
     *
     * @return $this
     *
     * @see FilenameFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'notName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c15b555f6e099b60c063445ec362e673' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds tests that file contents must match.
     *
     * Strings or PCRE patterns can be used:
     *
     *     $finder->contains(\'Lorem ipsum\')
     *     $finder->contains(\'/Lorem ipsum/i\')
     *
     * @param string $pattern A pattern (string or regexp)
     *
     * @return $this
     *
     * @see FilecontentFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'contains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3235eb07b1303289d62aba777a155d5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds tests that file contents must not match.
     *
     * Strings or PCRE patterns can be used:
     *
     *     $finder->notContains(\'Lorem ipsum\')
     *     $finder->notContains(\'/Lorem ipsum/i\')
     *
     * @param string $pattern A pattern (string or regexp)
     *
     * @return $this
     *
     * @see FilecontentFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'notContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '050bf06f5349f741d41ee0a421927900' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds rules that filenames must match.
     *
     * You can use patterns (delimited with / sign) or simple strings.
     *
     *     $finder->path(\'some/special/dir\')
     *     $finder->path(\'/some\\/special\\/dir/\') // same as above
     *
     * Use only / as dirname separator.
     *
     * @param string $pattern A pattern (a regexp or a string)
     *
     * @return $this
     *
     * @see FilenameFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'path',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7bf1f6848d89fd8a7e09717455501c85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds rules that filenames must not match.
     *
     * You can use patterns (delimited with / sign) or simple strings.
     *
     *     $finder->notPath(\'some/special/dir\')
     *     $finder->notPath(\'/some\\/special\\/dir/\') // same as above
     *
     * Use only / as dirname separator.
     *
     * @param string $pattern A pattern (a regexp or a string)
     *
     * @return $this
     *
     * @see FilenameFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'notPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bced65f30ac962498c302005fdac8153' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds tests for file sizes.
     *
     *     $finder->size(\'> 10K\');
     *     $finder->size(\'<= 1Ki\');
     *     $finder->size(4);
     *
     * @param string|int $size A size range string or an integer
     *
     * @return $this
     *
     * @see SizeRangeFilterIterator
     * @see NumberComparator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'size',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5b2d64695568de1264179835960b003' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Excludes directories.
     *
     * Directories passed as argument must be relative to the ones defined with the `in()` method. For example:
     *
     *     $finder->in(__DIR__)->exclude(\'ruby\');
     *
     * @param string|array $dirs A directory path or an array of directories
     *
     * @return $this
     *
     * @see ExcludeDirectoryFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'exclude',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ad6d2564509fbd7df8cfc56c87d303d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Excludes "hidden" directories and files (starting with a dot).
     *
     * This option is enabled by default.
     *
     * @param bool $ignoreDotFiles Whether to exclude "hidden" files or not
     *
     * @return $this
     *
     * @see ExcludeDirectoryFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'ignoreDotFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b24ed7889bb86b4366502aded9a94b8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Forces the finder to ignore version control directories.
     *
     * This option is enabled by default.
     *
     * @param bool $ignoreVCS Whether to exclude VCS files or not
     *
     * @return $this
     *
     * @see ExcludeDirectoryFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'ignoreVCS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4b962010245e5dd8682f04207bb1fda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds VCS patterns.
     *
     * @see ignoreVCS()
     *
     * @param string|string[] $pattern VCS patterns to ignore
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'addVCSPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26a2b82eebe90c68f10e8d2534b2e81a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sorts files and directories by an anonymous function.
     *
     * The anonymous function receives two \\SplFileInfo instances to compare.
     *
     * This can be slow as all the matching files and directories must be retrieved for comparison.
     *
     * @return $this
     *
     * @see SortableIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'sort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0079c415a12935d5cb3fac8adaec73ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sorts files and directories by name.
     *
     * This can be slow as all the matching files and directories must be retrieved for comparison.
     *
     * @return $this
     *
     * @see SortableIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'sortByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf45266ae09014bcd53c2427f185f87f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sorts files and directories by type (directories before files), then by name.
     *
     * This can be slow as all the matching files and directories must be retrieved for comparison.
     *
     * @return $this
     *
     * @see SortableIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'sortByType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef05143c55b3c6e1c2b3143a4c8d829f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sorts files and directories by the last accessed time.
     *
     * This is the time that the file was last accessed, read or written to.
     *
     * This can be slow as all the matching files and directories must be retrieved for comparison.
     *
     * @return $this
     *
     * @see SortableIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'sortByAccessedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3256ab859651d5292140a18352000d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sorts files and directories by the last inode changed time.
     *
     * This is the time that the inode information was last modified (permissions, owner, group or other metadata).
     *
     * On Windows, since inode is not available, changed time is actually the file creation time.
     *
     * This can be slow as all the matching files and directories must be retrieved for comparison.
     *
     * @return $this
     *
     * @see SortableIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'sortByChangedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cd0121ccb460cd049fc89062ce7e993' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sorts files and directories by the last modified time.
     *
     * This is the last time the actual contents of the file were last modified.
     *
     * This can be slow as all the matching files and directories must be retrieved for comparison.
     *
     * @return $this
     *
     * @see SortableIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'sortByModifiedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7920b31134ad5279ff950fa94a54237' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Filters the iterator with an anonymous function.
     *
     * The anonymous function receives a \\SplFileInfo and must return false
     * to remove files.
     *
     * @return $this
     *
     * @see CustomFilterIterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'filter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '580cadb048910cdbf241a3589b4ddc04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Forces the following of symlinks.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'followLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37ace7a5d59ba18afa4409c44507e552' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Tells finder to ignore unreadable directories.
     *
     * By default, scanning unreadable directories content throws an AccessDeniedException.
     *
     * @param bool $ignore
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'ignoreUnreadableDirs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39e974d9f885e7806c38d4b487e38cd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Searches files and directories which match defined rules.
     *
     * @param string|string[] $dirs A directory path or an array of directories
     *
     * @return $this
     *
     * @throws \\InvalidArgumentException if one of the directories does not exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'in',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b4a6f872d309208935e124193a17cd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an Iterator for the current Finder configuration.
     *
     * This method implements the IteratorAggregate interface.
     *
     * @return \\Iterator|SplFileInfo[] An iterator
     *
     * @throws \\LogicException if the in() method has not been called
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'getIterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '949a0fd21b85abd2b559fd813aebe007' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Appends an existing set of files/directories to the finder.
     *
     * The set can be another Finder, an Iterator, an IteratorAggregate, or even a plain array.
     *
     * @param iterable $iterator
     *
     * @return $this
     *
     * @throws \\InvalidArgumentException when the given argument is not iterable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'append',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fe813bff3e3f41cb261c82dd91cffe9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if the any results were found.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'hasResults',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e8bb6832a9dc4b0032821159b5f133c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Counts all the results collected by the iterators.
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'count',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c3d3694506a38824ba3870571e78ce7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $dir
     *
     * @return \\Iterator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'searchInDirectory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6b0ff4e0ceafdc4f989acd06ecde63b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Normalizes given directory names by removing trailing slashes.
     *
     * Excluding: (s)ftp:// or ssh2.(s)ftp:// wrapper
     *
     * @param string $dir
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Finder',
         'uses' => 
        array (
          'datecomparator' => 'Symfony\\Component\\Finder\\Comparator\\DateComparator',
          'numbercomparator' => 'Symfony\\Component\\Finder\\Comparator\\NumberComparator',
          'customfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator',
          'daterangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator',
          'depthrangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator',
          'excludedirectoryfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator',
          'filecontentfilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator',
          'filenamefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator',
          'sizerangefilteriterator' => 'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator',
          'sortableiterator' => 'Symfony\\Component\\Finder\\Iterator\\SortableIterator',
        ),
         'className' => 'Symfony\\Component\\Finder\\Finder',
         'functionName' => 'normalizeDir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));