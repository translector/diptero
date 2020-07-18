<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/tidy/tidy.stub-1593604621',
   'data' => 
  array (
    'a32066697355baf5f9f0892561a0dde6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An HTML node in an HTML file, as detected by tidy.
 * @link https://php.net/manual/en/class.tidy.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2aad2f6325d12d7a2f2493a938b1a44e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @var string  The last warnings and errors from TidyLib
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be98732daa5932a62411cabff558a2d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Returns the value of the specified configuration option for the tidy document
	 * @link https://php.net/manual/en/tidy.getopt.php
	 * @param string $option <p>
	 * You will find a list with each configuration option and their types
	 * at: http://tidy.sourceforge.net/docs/quickref.html.
	 * </p>
	 * @return mixed the value of the specified <i>option</i>.
	 * The return type depends on the type of the specified one.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'getOpt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '873f013f2ddd5115f05bcf93c338811b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Execute configured cleanup and repair operations on parsed markup
	 * @link https://php.net/manual/en/tidy.cleanrepair.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'cleanRepair',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '181a44d714fbaab2f447d11eac8cef1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Parse markup in file or URI
	 * @link https://php.net/manual/en/tidy.parsefile.php
	 * @param string $filename <p>
	 * If the <i>filename</i> parameter is given, this function
	 * will also read that file and initialize the object with the file,
	 * acting like <b>tidy_parse_file</b>.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * For an explanation about each option, see
	 * http://tidy.sourceforge.net/docs/quickref.html.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * Search for the file in the include_path.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'parseFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a11ea944eff4802aa7e02b05d3c04f4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Parse a document stored in a string
	 * @link https://php.net/manual/en/tidy.parsestring.php
	 * @param string $input <p>
	 * The data to be parsed.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @return bool a new <b>tidy</b> instance.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'parseString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d3d3fb519db782c948aa73701bd1caa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
	 * Repair a string using an optionally provided configuration file
	 * @link https://php.net/manual/en/tidy.repairstring.php
	 * @param string $data <p>
	 * The data to be repaired.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * Check http://tidy.sourceforge.net/docs/quickref.html for
	 * an explanation about each option.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @return string the repaired string.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'repairString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '653f5456847f49d5f3858ecd5deb0e71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
	 * Repair a file and return it as a string
	 * @link https://php.net/manual/en/tidy.repairfile.php
	 * @param string $filename <p>
	 * The file to be repaired.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * Check http://tidy.sourceforge.net/docs/quickref.html for an
	 * explanation about each option.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * Search for the file in the include_path.
	 * </p>
	 * @return string the repaired contents as a string.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'repairFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3cd16056e84524dddfc097a97330e58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Run configured diagnostics on parsed and repaired markup
	 * @link https://php.net/manual/en/tidy.diagnose.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'diagnose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f2791641884833401318960da6e87e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Get release date (version) for Tidy library
	 * @link https://php.net/manual/en/tidy.getrelease.php
	 * @return string a string with the release date of the Tidy library.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'getRelease',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b19f431b1668f78c4ecb0a8adaa33d19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
	 * Get current Tidy configuration
	 * @link https://php.net/manual/en/tidy.getconfig.php
	 * @return array an array of configuration options.
	 * </p>
	 * <p>
	 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'getConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '151e48a8a930b4abb4f741a5fb7eed62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Get status of specified document
	 * @link https://php.net/manual/en/tidy.getstatus.php
	 * @return int 0 if no error/warning was raised, 1 for warnings or accessibility
	 * errors, or 2 for errors.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'getStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c15f279ceff4a87d0dd523b341698a9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Get the Detected HTML version for the specified document
	 * @link https://php.net/manual/en/tidy.gethtmlver.php
	 * @return int the detected HTML version.
	 * </p>
	 * <p>
	 * This function is not yet implemented in the Tidylib itself, so it always
	 * return 0.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'getHtmlVer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffe744467b1e7f36ef516a654b7199d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Returns the documentation for the given option name
	 * @link https://php.net/manual/en/tidy.getoptdoc.php
	 * @param string $optname <p>
	 * The option name
	 * </p>
	 * @return string a string if the option exists and has documentation available, or
	 * <b>FALSE</b> otherwise.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'getOptDoc',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f46faa6e73d282a8bd17c581ded55248' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Indicates if the document is a XHTML document
	 * @link https://php.net/manual/en/tidy.isxhtml.php
	 * @return bool This function returns <b>TRUE</b> if the specified tidy
	 * <i>object</i> is a XHTML document, or <b>FALSE</b> otherwise.
	 * </p>
	 * <p>
	 * This function is not yet implemented in the Tidylib itself, so it always
	 * return <b>FALSE</b>.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'isXhtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02d969f9d28dde69c3d9e875730eb751' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Indicates if the document is a generic (non HTML/XHTML) XML document
	 * @link https://php.net/manual/en/tidy.isxml.php
	 * @return bool This function returns <b>TRUE</b> if the specified tidy
	 * <i>object</i> is a generic XML document (non HTML/XHTML),
	 * or <b>FALSE</b> otherwise.
	 * </p>
	 * <p>
	 * This function is not yet implemented in the Tidylib itself, so it always
	 * return <b>FALSE</b>.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'isXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd059a4f420452be27d7c632427854bfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
	 * Returns a <b>tidyNode</b> object representing the root of the tidy parse tree
	 * @link https://php.net/manual/en/tidy.root.php
	 * @return tidyNode the <b>tidyNode</b> object.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'root',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca2b8859145a0e308cbce10b2cbb165f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
	 * Returns a <b>tidyNode</b> object starting from the &lt;head&gt; tag of the tidy parse tree
	 * @link https://php.net/manual/en/tidy.head.php
	 * @return tidyNode the <b>tidyNode</b> object.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'head',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3843a5c9e4c94241f2ae054c2ba39ab2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
	 * Returns a <b>tidyNode</b> object starting from the &lt;html&gt; tag of the tidy parse tree
	 * @link https://php.net/manual/en/tidy.html.php
	 * @return tidyNode the <b>tidyNode</b> object.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'html',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deed20adf100cbf874af28a318ec9c3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy 0.5.2-1.0)<br/>
	 * Returns a <b>tidyNode</b> object starting from the &lt;body&gt; tag of the tidy parse tree
	 * @link https://php.net/manual/en/tidy.body.php
	 * @return tidyNode a <b>tidyNode</b> object starting from the
	 * &lt;body&gt; tag of the tidy parse tree.
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => 'body',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc8f6ab52b73d4a198a83b1404d5db27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
	 * Constructs a new <b>tidy</b> object
	 * @link https://php.net/manual/en/tidy.construct.php
	 * @param string $filename [optional] <p>
	 * If the <i>filename</i> parameter is given, this function
	 * will also read that file and initialize the object with the file,
	 * acting like <b>tidy_parse_file</b>.
	 * </p>
	 * @param mixed $config [optional] <p>
	 * The config <i>config</i> can be passed either as an
	 * array or as a string. If a string is passed, it is interpreted as the
	 * name of the configuration file, otherwise, it is interpreted as the
	 * options themselves.
	 * </p>
	 * <p>
	 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The <i>encoding</i> parameter sets the encoding for
	 * input/output documents. The possible values for encoding are:
	 * ascii, latin0, latin1,
	 * raw, utf8, iso2022,
	 * mac, win1252, ibm858,
	 * utf16, utf16le, utf16be,
	 * big5, and shiftjis.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * Search for the file in the include_path.
	 * </p>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidy',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88c25788df07caf802bbb0c696c1a519' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An HTML node in an HTML file, as detected by tidy.
 * @link https://php.net/manual/en/class.tidynode.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62aa1127f045a34db5036ee506575bd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">The HTML representation of the node, including the surrounding tags.</p>
	 * @var string
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66baf7bc1a785c83c51c497e966c66a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">The name of the HTML node</p>
	 * @var string
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46a50c580bc652ce22c512c34c80e49a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">The type of the tag (one of the constants above, e.g. <b><code>TIDY_NODETYPE_PHP</code></b>)</p>
	 * @var int
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6251cab15aec75a4f65b4a87ac39cce7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">The line number at which the tags is located in the file</p>
	 * @var int
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eabc9362d2976e1abca33ef37e7c8e94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">The column number at which the tags is located in the file</p>
	 * @var int
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfe315a876b5ae0fca202ba32c5aef55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">Indicates if the node is a proprietary tag</p>
	 * @var bool
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5301ef9ac7f5b12b19c8643310f7e87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">The ID of the tag (one of the constants above, e.g. <b><code>TIDY_TAG_FRAME</code></b>)</p>
	 * @var int
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bde618124d55a9499c254e843c6947fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">
	 * An array of string, representing
	 * the attributes names (as keys) of the current node.
	 * </p>
	 * @var array
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee1b29912b8e4a705b85937151bdd3ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * <p style="margin-top:0;">
	 * An array of <b>tidyNode</b>, representing
	 * the children of the current node.
	 * </p>
	 * @var array
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd66572c1d0d63d75d1f64be17fb77f26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Checks if a node has children
	 * @link https://php.net/manual/en/tidynode.haschildren.php
	 * @return bool <b>TRUE</b> if the node has children, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'hasChildren',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4ccb5eedbec564895c75c1d6ca40c1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Checks if a node has siblings
	 * @link https://php.net/manual/en/tidynode.hassiblings.php
	 * @return bool <b>TRUE</b> if the node has siblings, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'hasSiblings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f01d8859f0d43f884543e39ba34dcd10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Checks if a node represents a comment
	 * @link https://php.net/manual/en/tidynode.iscomment.php
	 * @return bool <b>TRUE</b> if the node is a comment, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'isComment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bac3d5fda790c3df1b0dee28c30765f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Checks if a node is part of a HTML document
	 * @link https://php.net/manual/en/tidynode.ishtml.php
	 * @return bool <b>TRUE</b> if the node is part of a HTML document, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'isHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6436bb2e402abda45202a46a7a5f708b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Checks if a node represents text (no markup)
	 * @link https://php.net/manual/en/tidynode.istext.php
	 * @return bool <b>TRUE</b> if the node represent a text, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'isText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b93617fd31bef5f88b670689140dd326' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Checks if this node is JSTE
	 * @link https://php.net/manual/en/tidynode.isjste.php
	 * @return bool <b>TRUE</b> if the node is JSTE, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'isJste',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3996dc1fb8cd1dfded354955ba6b5db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Checks if this node is ASP
	 * @link https://php.net/manual/en/tidynode.isasp.php
	 * @return bool <b>TRUE</b> if the node is ASP, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'isAsp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc165f3abb4d8ea357f843f4e5fd5be6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Checks if a node is PHP
	 * @link https://php.net/manual/en/tidynode.isphp.php
	 * @return bool <b>TRUE</b> if the current node is PHP code, <b>FALSE</b> otherwise.
	 * @since 5.0.1
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'isPhp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3eec42e8b5b580b129027f222beeca1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Returns the parent node of the current node
	 * @link https://php.net/manual/en/tidynode.getparent.php
	 * @return tidyNode a tidyNode if the node has a parent, or <b>NULL</b>
	 * otherwise.
	 * @since 5.2.2
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => 'tidyNode',
         'functionName' => 'getParent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c85cf3f7b2cd12028ac0e88dad7ad92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the value of the specified configuration option for the tidy document
 * @link https://php.net/manual/en/tidy.getopt.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @param string $option <p>
 * You will find a list with each configuration option and their types
 * at: http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @return mixed the value of the specified <i>option</i>.
 * The return type depends on the type of the specified one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_getopt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6944de56e7872efc55b0e39aa27e745b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Parse a document stored in a string
 * @link https://php.net/manual/en/tidy.parsestring.php
 * @param string $input <p>
 * The data to be parsed.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @param string $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @return tidy a new <b>tidy</b> instance.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_parse_string',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81d0ff41af84abc406cda36d43624680' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Parse markup in file or URI
 * @link https://php.net/manual/en/tidy.parsefile.php
 * @param string $filename <p>
 * If the <i>filename</i> parameter is given, this function
 * will also read that file and initialize the object with the file,
 * acting like <b>tidy_parse_file</b>.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * For an explanation about each option, see
 * http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @param string $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @param bool $use_include_path [optional] <p>
 * Search for the file in the include_path.
 * </p>
 * @return tidy a new <b>tidy</b> instance.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_parse_file',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ce9a0b57ea0946f3f14b09f9be50c5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Return a string representing the parsed tidy markup
 * @link https://php.net/manual/en/function.tidy-get-output.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return string the parsed tidy markup.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_output',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72f03c0d2d3cab7672b9a5513c11679b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Return warnings and errors which occurred parsing the specified document
 * @link https://php.net/manual/en/tidy.props.errorbuffer.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return mixed the error buffer as a string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_error_buffer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f976f970a76bcb7373935f234c4e870c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Execute configured cleanup and repair operations on parsed markup
 * @link https://php.net/manual/en/tidy.cleanrepair.php
 * @param tidy $object The Tidy object.
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_clean_repair',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb38076210917c0dcc9abf59f235f30c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Repair a string using an optionally provided configuration file
 * @link https://php.net/manual/en/tidy.repairstring.php
 * @param string $data <p>
 * The data to be repaired.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * Check http://tidy.sourceforge.net/docs/quickref.html for
 * an explanation about each option.
 * </p>
 * @param string $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @return string the repaired string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_repair_string',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe74d67f2248c6dbdda328910661ca7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Repair a file and return it as a string
 * @link https://php.net/manual/en/tidy.repairfile.php
 * @param string $filename <p>
 * The file to be repaired.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * Check http://tidy.sourceforge.net/docs/quickref.html for an
 * explanation about each option.
 * </p>
 * @param string $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @param bool $use_include_path [optional] <p>
 * Search for the file in the include_path.
 * </p>
 * @return string the repaired contents as a string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_repair_file',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77d65483ffa474c1b6a846d14f79ef5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Run configured diagnostics on parsed and repaired markup
 * @link https://php.net/manual/en/tidy.diagnose.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_diagnose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f98d8471f10811e1ff11f82652e75a3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get release date (version) for Tidy library
 * @link https://php.net/manual/en/tidy.getrelease.php
 * @return string a string with the release date of the Tidy library.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_release',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d02a62ee9b1f65dd255b1832831277e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Get current Tidy configuration
 * @link https://php.net/manual/en/tidy.getconfig.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return array an array of configuration options.
 * </p>
 * <p>
 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_config',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48381cc309d873c997a825090f87b4f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get status of specified document
 * @link https://php.net/manual/en/tidy.getstatus.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int 0 if no error/warning was raised, 1 for warnings or accessibility
 * errors, or 2 for errors.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_status',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '089a84e8d7e160aff4f3c1fc88a608f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get the Detected HTML version for the specified document
 * @link https://php.net/manual/en/tidy.gethtmlver.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the detected HTML version.
 * </p>
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return 0.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_html_ver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f9908b09ce5aff4a1e287f967b723f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Indicates if the document is a XHTML document
 * @link https://php.net/manual/en/tidy.isxhtml.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool This function returns <b>TRUE</b> if the specified tidy
 * <i>object</i> is a XHTML document, or <b>FALSE</b> otherwise.
 * </p>
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return <b>FALSE</b>.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_is_xhtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '818d4c2a28232347953995c36ef596be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Indicates if the document is a generic (non HTML/XHTML) XML document
 * @link https://php.net/manual/en/tidy.isxml.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool This function returns <b>TRUE</b> if the specified tidy
 * <i>object</i> is a generic XML document (non HTML/XHTML),
 * or <b>FALSE</b> otherwise.
 * </p>
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return <b>FALSE</b>.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_is_xml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a69b8d0f42d93b2e853e8551ebe27be0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the Number of Tidy errors encountered for specified document
 * @link https://php.net/manual/en/function.tidy-error-count.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the number of errors.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_error_count',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54590c03e9e3d1cd579a737e826f3544' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the Number of Tidy warnings encountered for specified document
 * @link https://php.net/manual/en/function.tidy-warning-count.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the number of warnings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_warning_count',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9534b3d443464f463220eaf9eee73a7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the Number of Tidy accessibility warnings encountered for specified document
 * @link https://php.net/manual/en/function.tidy-access-count.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the number of warnings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_access_count',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a3915364039624b4433dddcf663b26c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the Number of Tidy configuration errors encountered for specified document
 * @link https://php.net/manual/en/function.tidy-config-count.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the number of errors.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_config_count',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b63acaf04a7bb01d22ef22222d2b4035' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the documentation for the given option name
 * @link https://php.net/manual/en/tidy.getoptdoc.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @param string $optname <p>
 * The option name
 * </p>
 * @return string a string if the option exists and has documentation available, or
 * <b>FALSE</b> otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_opt_doc',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb0fac629f1bb2c3075cb35bdaa3df27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object representing the root of the tidy parse tree
 * @link https://php.net/manual/en/tidy.root.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode the <b>tidyNode</b> object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_root',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dc4d22b02a87f5db5e46a58b3cc5b5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;head&gt; tag of the tidy parse tree
 * @link https://php.net/manual/en/tidy.head.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode the <b>tidyNode</b> object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_head',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa6d9914acbed39f930d235f014a3785' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;html&gt; tag of the tidy parse tree
 * @link https://php.net/manual/en/tidy.html.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode the <b>tidyNode</b> object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_html',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '363f0bfa23eb7b615ffd3c6157ebe32b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5, PECL tidy 0.5.2-1.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;body&gt; tag of the tidy parse tree
 * @link https://php.net/manual/en/tidy.body.php
 * @param tidy $object <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode a <b>tidyNode</b> object starting from the
 * &lt;body&gt; tag of the tidy parse tree.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'tidy_get_body',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '342ba8d5ec34201ba487b0fa441d2e8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ob_start callback function to repair the buffer
 * @link https://php.net/manual/en/function.ob-tidyhandler.php
 * @param string $input <p>
 * The buffer.
 * </p>
 * @param int $mode [optional] <p>
 * The buffer mode.
 * </p>
 * @return string the modified buffer.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'ob_tidyhandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b0008b16cad5fcec35f2dd9dfbdcda8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * description
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0abc59ed050160d01fad6860281ed5fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @since 7.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffd37f96a3d0926bf21c17f61177f371' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * root node
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a96bfe58c1d86f955b596cbdcc11213' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * doctype
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bbc7d239026f7c911a2d6b162efc108c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * HTML comment
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9004a9aab5c375b5c5fbe1a9f790a8e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Processing Instruction
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b209fbf0ba45c4125d9c83631bb782ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Text
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3dba35530f30ec5193bd9812f4f97433' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * start tag
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3164147f62474965ec16a1b7e7a40505' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * end tag
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '748a84d633c0054063800677f58b9fca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * empty tag
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4a0210796591bb41eae69dcdb6fb192' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * CDATA
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6b727fd0b4a043d478a8df8e64a9c4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * XML section
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24a5f1b35201a5a3fcfb8c1488035357' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ASP code
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b502e1737940b3c802729a24a081ae2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * JSTE code
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e7c9d125fcd014f1cc9248fdee50b62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * PHP code
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd171a04e44f44d037adc54b01d53bcaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * XML declaration
 * @link https://php.net/manual/en/tidy.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
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