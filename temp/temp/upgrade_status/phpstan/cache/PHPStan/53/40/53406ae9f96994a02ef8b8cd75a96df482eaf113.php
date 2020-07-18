<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/phpunit/phpunit/src/Framework/TestCase.php-1578473145',
   'data' => 
  array (
    'ac69dd286f9bcf7b207e4f17cc01a55c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68550e8944439bd9463125819e535e4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2a58d57ff384fe0b192c2639150847b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e7d187a850049531ed1489b518456af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var null|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1da6985e5119ad6a450d0f93ef00204' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var null|int|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c6f7d412dc1e10bbdc411f88f593024' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b55998744bb38ba7a6cc047b404dbd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var MockGenerator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7ba80c1c1cd3fc7992319633a537ef1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27b330e66e2493ec28fc031ff5b9586b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var TestResult
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7193011529c877b551bb2bd815ac1b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9785f55264098e368da544f909fa804' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Snapshot
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8d6f4831c896ab49c8715b09348c84b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Prophecy\\Prophet
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd05824b973efa2ea7f32275c1880e499' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Comparator[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb80f398754f7cacbf2908e96e5b676e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'any',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40d115283d372fb8f7d9517807640cf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is never executed.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'never',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e0dbc7ccaddf6713b73b8da2ba16949' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * at least N times.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'atLeast',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f45db0b45f479ac340d6b21242d6e8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed at least once.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'atLeastOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc09a7984d6b51147a2821a9fe83af03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed exactly once.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'once',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35b5fb9eeff81cd5c1366167fd2e8de9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'exactly',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c8759fba124302414e02bf6a792d44a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * at most N times.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'atMost',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2f195a02e87d690e16c5dd9abcae70b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matcher that matches when the method is executed
     * at the given index.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'at',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efe812984735ab7e2b137302d3fab635' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'returnSelf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0e6602c6e53f2f4a50ccb3e90062224' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $name
     * @param string $dataName
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64b4d6e9f12236c1eb2926ff3e012fa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called before the first test of this test class is run.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setUpBeforeClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90f00fe21ddd98fb3a179b5e49a253a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called after the last test of this test class is run.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'tearDownAfterClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59fd218b1b15f03ef9a505c21b5bedd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called before each test.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5fb64cae3272416a6adba8e2862085a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called after each test.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'tearDown',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05410fa9ce35593ef9d42a7ebd70bdd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a string representation of the test case.
     *
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws \\ReflectionException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5dd90d8eb03ba6847294ead88d415a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8668b6bd6c9a1c52d87af4b66e2bb06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the size of the test.
     *
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ad1e8ed215463662bf32a065f07e510' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'hasSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bef051f21aa9d8786f5615ce037f286' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'isSmall',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b981a9fb3ef73440d8a7f4c6e42b0360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'isMedium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4680528849c7ecd0bd0ed725647f045' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'isLarge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ba91cc23f4c8a10b6bf2f5f182bb210' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return null|int|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getExpectedExceptionCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51ec38528a897c649b75e45eddfaa543' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int|string $code
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'expectExceptionCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42ace98b1301317fe288b1bcb6b9c784' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'expectExceptionObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bc2f9a146d90bebc885bda0d0b194ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Runs the test case and collects the results in a TestResult object.
     * If no TestResult object is passed a new one will be created.
     *
     * @throws CodeCoverageException
     * @throws ReflectionException
     * @throws \\SebastianBergmann\\CodeCoverage\\CoveredCodeNotExecutedException
     * @throws \\SebastianBergmann\\CodeCoverage\\InvalidArgumentException
     * @throws \\SebastianBergmann\\CodeCoverage\\MissingCoversAnnotationException
     * @throws \\SebastianBergmann\\CodeCoverage\\RuntimeException
     * @throws \\SebastianBergmann\\CodeCoverage\\UnintentionallyCoveredCodeException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'run',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97ae4a6492ca4b36914924f959db21ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\Throwable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'runBare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6c763c4a34d5e1164498f8da1e1a6da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string[] $dependencies
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '479702300ca26a55ff0b066eaa407bc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @param string|string[] $className
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockBuilder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06c0db666033b4258574dd289de6a3c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the number of assertions performed by this test.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getNumAssertions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81bef56e228661e1529735f44174017f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return int|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'dataName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3410839842ab2de6f5a66958a75cf8f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the data set of a TestCase.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getProvidedData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bf5c0fc1b9ea3404dbfca6c3906fb06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Override to run the test and assert its state.
     *
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\ObjectEnumerator\\InvalidArgumentException
     * @throws Throwable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'runTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2aa0b90f42c72065b9e4dafa6033ed5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'iniSet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d9e868c77c57eb991cdf386e0c4143a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'setLocale',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5498962aa2ddc2eea5ee38fa01aab91c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a test double for the specified class.
     *
     * @param string|string[] $originalClassName
     *
     * @throws Exception
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createMock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e30fc8ce0c9f2e19f225fd5f31f8f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a configured test double for the specified class.
     *
     * @param string|string[] $originalClassName
     *
     * @throws Exception
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createConfiguredMock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd329cae3ec3ad79e431cfb1ca5f36042' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a partial test double for the specified class.
     *
     * @param string|string[] $originalClassName
     * @param string[]        $methods
     *
     * @throws Exception
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createPartialMock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c47977e3ff7d9a33277738a7c2aa36cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a test proxy for the specified class.
     *
     * @throws Exception
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createTestProxy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab9f4f8697fa909bb38e7eacc32f25e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mocks the specified class and returns the name of the mocked class.
     *
     * @param string $originalClassName
     * @param array  $methods
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bddcc1cba8d9d7a6a3dfc47c6f7b9422' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked. Concrete methods are not mocked by default.
     * To mock concrete methods, use the 7th parameter ($mockedMethods).
     *
     * @param string $originalClassName
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param array  $mockedMethods
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockForAbstractClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '580852f25c60b816a59ba1e0e976fc8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a mock object based on the given WSDL file.
     *
     * @param string $wsdlFile
     * @param string $originalClassName
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param array  $options                 An array of options passed to SOAPClient::_construct
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockFromWsdl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3284d8ec4c320748bbe2c68f2fce35d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @param string $traitName
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param array  $mockedMethods
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockForTrait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5b84c85a966acfe0dc6349f4a0700e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an object for the specified trait.
     *
     * @param string $traitName
     * @param string $traitClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \\InvalidArgumentException
     *
     * @return object
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getObjectForTrait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5b6741ad7cc3e57c0cb408ae253270e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param null|string $classOrInterface
     *
     * @throws Prophecy\\Exception\\Doubler\\ClassNotFoundException
     * @throws Prophecy\\Exception\\Doubler\\DoubleException
     * @throws Prophecy\\Exception\\Doubler\\InterfaceNotFoundException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'prophesize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb165616c7d233b057bcc1d26462b4dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a default TestResult object.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'createResult',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '874b65b1e012058b65d4570be70bfff3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between setUp() and test.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'assertPreConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40d9afe766dfabdd23fbe805084383b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between test and tearDown().
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'assertPostConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '393952ac56316b3969b0ba34f4c4a41d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'onNotSuccessfulTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbd91530dd1c478fa3146071349b12f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var MethodProphecy[] $methodProphecies */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'verifyMockObjects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee38c277225031dc8dd3ef306120d3ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the mock object generator, creating it if it doesn\'t exist.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'getMockObjectGenerator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b517f4c87935357533290d8284bb4ea0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws RiskyTestError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'stopOutputBuffering',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1f4c92f2da6382ae9257af08c0aeab2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws RiskyTestError
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'restoreGlobalState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a396aa53ee72197620f9f4303c13fc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws RiskyTestError
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'compareGlobalStateSnapshots',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2f3375956af3cd9eb7e1010aa8c19dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws RiskyTestError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'compareGlobalStateSnapshotPart',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3575f171542fd473c3c802a06f7f44c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\ObjectEnumerator\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'shouldInvocationMockerBeReset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0484f27578e260436a709aaaeb8b3af2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\SebastianBergmann\\ObjectEnumerator\\InvalidArgumentException
     * @throws \\SebastianBergmann\\ObjectReflector\\InvalidArgumentException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'registerMockObjectsFromTestArguments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2875c7f2cc3b6fad36b49b7c4cc00459' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ReflectionException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'deepcopy' => 'DeepCopy\\DeepCopy',
          'exceptionconstraint' => 'PHPUnit\\Framework\\Constraint\\Exception',
          'exceptioncode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
          'exceptionmessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
          'exceptionmessageregularexpression' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression',
          'mockgenerator' => 'PHPUnit\\Framework\\MockObject\\Generator',
          'anyinvokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyInvokedCount',
          'invokedatindexmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtIndex',
          'invokedatleastcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastCount',
          'invokedatleastoncematcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtLeastOnce',
          'invokedatmostcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedAtMostCount',
          'invokedcountmatcher' => 'PHPUnit\\Framework\\MockObject\\Matcher\\InvokedCount',
          'mockbuilder' => 'PHPUnit\\Framework\\MockObject\\MockBuilder',
          'mockobject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
          'consecutivecallsstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ConsecutiveCalls',
          'exceptionstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\Exception',
          'returnargumentstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnArgument',
          'returncallbackstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnCallback',
          'returnselfstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnSelf',
          'returnstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
          'returnvaluemapstub' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnValueMap',
          'basetestrunner' => 'PHPUnit\\Runner\\BaseTestRunner',
          'phpttestcase' => 'PHPUnit\\Runner\\PhptTestCase',
          'globalstate' => 'PHPUnit\\Util\\GlobalState',
          'abstractphpprocess' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
          'prophecy' => 'Prophecy',
          'predictionexception' => 'Prophecy\\Exception\\Prediction\\PredictionException',
          'methodprophecy' => 'Prophecy\\Prophecy\\MethodProphecy',
          'objectprophecy' => 'Prophecy\\Prophecy\\ObjectProphecy',
          'prophet' => 'Prophecy\\Prophet',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
          'differ' => 'SebastianBergmann\\Diff\\Differ',
          'exporter' => 'SebastianBergmann\\Exporter\\Exporter',
          'blacklist' => 'SebastianBergmann\\GlobalState\\Blacklist',
          'restorer' => 'SebastianBergmann\\GlobalState\\Restorer',
          'snapshot' => 'SebastianBergmann\\GlobalState\\Snapshot',
          'enumerator' => 'SebastianBergmann\\ObjectEnumerator\\Enumerator',
          'text_template' => 'Text_Template',
          'throwable' => 'Throwable',
        ),
         'className' => 'PHPUnit\\Framework\\TestCase',
         'functionName' => 'checkExceptionExpectations',
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