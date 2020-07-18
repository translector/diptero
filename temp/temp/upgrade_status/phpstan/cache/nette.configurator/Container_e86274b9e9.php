<?php
// source: phar:///var/www/html/vendor/phpstan/phpstan/phpstan/conf/config.neon
// source: /var/www/html/web/../temp/upgrade_status/deprecation_testing.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_e86274b9e9 extends _HumbugBox69342eed62ce\Nette\DI\Container
{
	protected $tags = [
		'phpstan.phpDoc.typeNodeResolverExtension' => ['018' => true],
		'phpstan.broker.methodsClassReflectionExtension' => ['059' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => [
			'060' => true,
			'063' => true,
			'0119' => true,
			'0170' => true,
		],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'087' => true,
			'088' => true,
			'089' => true,
			'090' => true,
			'091' => true,
			'093' => true,
			'094' => true,
			'095' => true,
			'096' => true,
			'097' => true,
			'098' => true,
			'099' => true,
			'0100' => true,
			'0101' => true,
			'0102' => true,
			'0103' => true,
			'0104' => true,
			'0108' => true,
			'0110' => true,
			'0112' => true,
			'0113' => true,
			'0114' => true,
			'0115' => true,
			'0116' => true,
			'0117' => true,
			'0118' => true,
			'0120' => true,
			'0123' => true,
			'0124' => true,
			'0125' => true,
			'0126' => true,
			'0127' => true,
			'0128' => true,
			'0129' => true,
			'0130' => true,
			'0131' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0135' => true,
			'0136' => true,
			'0157' => true,
			'0158' => true,
			'0160' => true,
			'0161' => true,
			'0162' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'092' => true,
			'0109' => true,
			'0121' => true,
			'0122' => true,
			'0137' => true,
			'0138' => true,
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0142' => true,
			'0143' => true,
			'0144' => true,
			'0145' => true,
			'0146' => true,
			'0147' => true,
			'0148' => true,
			'0149' => true,
			'0150' => true,
			'0151' => true,
			'0152' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0156' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => ['0105' => true, '0107' => true],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0106' => true,
			'0111' => true,
			'0120' => true,
			'0159' => true,
			'0168' => true,
			'0169' => true,
		],
		'phpstan.rules.rule' => [
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.15' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.3' => true,
			'rules.4' => true,
			'rules.5' => true,
			'rules.6' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => '_HumbugBox69342eed62ce\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_HumbugBox69342eed62ce\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			0 => ['079'],
			2 => [
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
			],
		],
		'PHPStan\Rules\Classes\PluginManagerInspectionRule' => [2 => ['rules.0']],
		'PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule' => [2 => ['rules.1']],
		'PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule' => [2 => ['rules.2']],
		'PHPStan\Rules\Drupal\PluginManager\AbstractPluginManagerRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedConstant' => [2 => ['rules.4']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule' => [2 => ['rules.5']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule' => [2 => ['rules.6']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule' => [2 => ['rules.7']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule' => [2 => ['rules.8']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule' => [2 => ['rules.9']],
		'PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule' => [2 => ['rules.10']],
		'PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule' => [2 => ['rules.11']],
		'PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule' => [2 => ['rules.12']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule' => [2 => ['rules.13']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule' => [2 => ['rules.14']],
		'PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule' => [2 => ['rules.15']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule' => [2 => ['rules.16']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule' => [2 => ['rules.17']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule' => [2 => ['rules.18']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule' => [2 => ['rules.19']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule' => [2 => ['rules.20']],
		'PhpParser\BuilderFactory' => [['01']],
		'PhpParser\Lexer' => [['02']],
		'PhpParser\Lexer\Emulative' => [['02']],
		'PhpParser\NodeTraverserInterface' => [['03']],
		'PhpParser\NodeTraverser' => [['03']],
		'PhpParser\NodeVisitorAbstract' => [['04', '050']],
		'PhpParser\NodeVisitor' => [['04', '050']],
		'PhpParser\NodeVisitor\NameResolver' => [['04']],
		'PhpParser\ParserAbstract' => [['05']],
		'PhpParser\Parser' => [0 => ['05'], 2 => [1 => 'phpParserDecorator']],
		'PhpParser\Parser\Php7' => [['05']],
		'PhpParser\PrettyPrinterAbstract' => [['06']],
		'PhpParser\PrettyPrinter\Standard' => [['06']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['07']],
		'PHPStan\Php\PhpVersion' => [['08']],
		'PHPStan\Php\PhpVersionFactory' => [['09']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['010']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['011']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['012']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['013']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['014']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['015']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['016']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['017']],
		'PHPStan\PhpDoc\TypeNodeResolverExtension' => [['018']],
		'PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension' => [['018']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['019']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['020']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['021']],
		'PHPStan\PhpDoc\StubValidator' => [['022']],
		'PHPStan\Analyser\Analyser' => [['023']],
		'PHPStan\Analyser\FileAnalyser' => [['024']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['025']],
		'PHPStan\Analyser\ScopeFactory' => [['026']],
		'PHPStan\Analyser\LazyScopeFactory' => [['026']],
		'PHPStan\Analyser\NodeScopeResolver' => [['027']],
		'PHPStan\Analyser\ResultCache\ResultCacheManager' => [['028']],
		'PHPStan\Cache\Cache' => [['029']],
		'PHPStan\Command\AnalyseApplication' => [['030']],
		'PHPStan\Command\IgnoredRegexValidator' => [['031']],
		'PHPStan\Dependency\DependencyDumper' => [['032']],
		'PHPStan\Dependency\DependencyResolver' => [['033']],
		'PHPStan\DependencyInjection\Container' => [['034'], ['035']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['035']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['036']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['037']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['038']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['039']],
		'PHPStan\File\FileHelper' => [['040']],
		'PHPStan\File\FileExcluder' => [['041']],
		'PHPStan\File\FileFinder' => [['042']],
		'PHPStan\Parallel\ParallelAnalyser' => [['043']],
		'PHPStan\Parallel\Scheduler' => [['044']],
		'PHPStan\Parser\Parser' => [0 => ['045'], 2 => [1 => 'directParser']],
		'PHPStan\Parser\CachedParser' => [['045']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['046']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['047']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['048', '059', '061']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['048']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['049', '060', '061', '063', '0119', '0170']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['049']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['050']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['051']],
		'_HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\Type\SourceLocator' => [
			0 => ['052'],
			2 => [1 => 'betterReflectionSourceLocator'],
		],
		'PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator' => [['052']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['053']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['054']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['055']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['056']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['057']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['058']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['059']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['060']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['061']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['062']],
		'PHPStan\Reflection\BrokerAwareExtension' => [['063', '0158']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['063']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['064']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['065']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['066']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['067']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['068']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['069']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['070']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['071']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['072']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['073']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['074']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['075']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['076']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['077']],
		'PHPStan\Rules\IssetCheck' => [['078']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['079']],
		'PHPStan\Rules\MissingTypehintCheck' => [['080']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['081']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['082']],
		'PHPStan\Rules\RegistryFactory' => [['083']],
		'PHPStan\Rules\RuleLevelHelper' => [['084']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['085']],
		'PHPStan\Type\FileTypeMapper' => [['086']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'087',
				'088',
				'089',
				'090',
				'091',
				'093',
				'094',
				'095',
				'096',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0103',
				'0104',
				'0108',
				'0110',
				'0112',
				'0113',
				'0114',
				'0115',
				'0116',
				'0117',
				'0118',
				'0120',
				'0123',
				'0124',
				'0125',
				'0126',
				'0127',
				'0128',
				'0129',
				'0130',
				'0131',
				'0132',
				'0133',
				'0134',
				'0135',
				'0136',
				'0157',
				'0158',
				'0160',
				'0161',
				'0162',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['087']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['088']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['089']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['090']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['091']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'092',
				'0109',
				'0121',
				'0122',
				'0137',
				'0138',
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'092',
				'0109',
				'0121',
				'0122',
				'0137',
				'0138',
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
				'0158',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['092']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['093']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['094']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['095']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['096']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['097']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['098']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['099']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0100']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0101']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0102']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0103']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0104']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [['0105', '0107']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0105']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [['0106', '0111', '0120', '0159', '0168', '0169']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0106']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0107']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0108']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0109']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0110']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0111']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0112']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0113']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0114']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0115']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0116']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0117']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0118']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0119']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0120']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0121']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0122']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0123']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0124']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0125']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0126']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['0127']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0128']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0129']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0130']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0131']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0132']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0134']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0135']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0136']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0137']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0138']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0139']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0140']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0141']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['0142']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['0143']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['0144']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0145']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['0146']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0147']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0148']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0149']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0150']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0151']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0152']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0153']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0154']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0155']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0156']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0158']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0161']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0162']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [0 => ['relativePathHelper'], 2 => [1 => 'simpleRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [
			['reflectionProvider'],
			['broker', 'innerRuntimeReflectionProvider'],
			[2 => 'betterReflectionProvider', 'runtimeReflectionProvider'],
		],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\DirectParser' => [2 => ['directParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'_HumbugBox69342eed62ce\Roave\BetterReflection\Reflector\ClassReflector' => [
			2 => ['betterReflectionClassReflector', 'nodeScopeResolverClassReflector'],
		],
		'_HumbugBox69342eed62ce\Roave\BetterReflection\Reflector\Reflector' => [
			2 => [
				'betterReflectionClassReflector',
				'nodeScopeResolverClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
			],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector' => [
			2 => ['betterReflectionClassReflector', 'nodeScopeResolverClassReflector'],
		],
		'_HumbugBox69342eed62ce\Roave\BetterReflection\Reflector\FunctionReflector' => [
			2 => ['betterReflectionFunctionReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector' => [
			2 => ['betterReflectionFunctionReflector'],
		],
		'_HumbugBox69342eed62ce\Roave\BetterReflection\Reflector\ConstantReflector' => [
			2 => ['betterReflectionConstantReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector' => [
			2 => ['betterReflectionConstantReflector'],
		],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'Hoa\Compiler\Llk\Parser' => [['regexParser']],
		'Hoa\File\File' => [['regexGrammarStream']],
		'Hoa\File\Generic' => [['regexGrammarStream']],
		'Hoa\Stream\Stream' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pointable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Lockable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Bufferable' => [['regexGrammarStream']],
		'Hoa\Event\Source' => [['regexGrammarStream']],
		'Hoa\Event\Listenable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Stream' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pathable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Statable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Touchable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\In' => [['regexGrammarStream']],
		'Hoa\File\Read' => [['regexGrammarStream']],
		'PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider' => [2 => ['runtimeReflectionProvider']],
		'PHPStan\Reflection\Runtime\RuntimeReflectionProvider' => [['innerRuntimeReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0163']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0164']],
		'_HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [
			1 => ['0165', '0166'],
		],
		'_HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [
			['0165'],
		],
		'_HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0166']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.baselineNeon',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter' => [['errorFormatter.baselineNeon']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Drupal\ServiceMap' => [['0167']],
		'PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension' => [['0168']],
		'PHPStan\Type\ServiceDynamicReturnTypeExtension' => [['0169']],
		'PHPStan\Reflection\EntityFieldsViaMagicReflectionExtension' => [['0170']],
		'PHPStan\Rules\Deprecations\DeprecatedClassHelper' => [['0171']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'bootstrap' => null,
			'bootstrapFiles' => ['/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php'],
			'excludes_analyse' => [
				'*.api.php',
				'*/tests/fixtures/*.php',
				'*/tests/Drupal/Tests/Listeners/Legacy/*',
				'*/tests/fixtures/*.php',
				'*/settings*.php',
			],
			'autoload_directories' => [],
			'autoload_files' => [],
			'level' => null,
			'paths' => [],
			'featureToggles' => [
				'disableRuntimeReflectionProvider' => false,
				'closureUsesThis' => false,
				'randomIntParameters' => false,
				'nullCoalesce' => false,
				'fileWhitespace' => false,
			],
			'fileExtensions' => ['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine'],
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => false,
			'checkExplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => false,
			'checkMissingIterableValueType' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => false,
			'checkNullables' => false,
			'checkThisOnly' => true,
			'checkUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'checkPhpDocMethodSignatures' => false,
			'checkExtraArguments' => false,
			'checkMissingClosureNativeReturnTypehintRule' => false,
			'checkMissingTypehints' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportStaticMethodSignatures' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 60.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteCatchScopeWithTryAssignments' => false,
			'treatPhpDocTypesAsCertain' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 512, 'nodesByStringCountMax' => 512],
			'reportUnmatchedIgnoredErrors' => false,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => ['scalar' => 'int|float|string|bool', 'number' => 'int|float'],
			'universalObjectCratesClasses' => ['stdClass'],
			'stubFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'memoryLimitFile' => '/var/www/html/temp/temp/upgrade_status/phpstan/.memory_limit',
			'staticReflectionClassNamePatterns' => ['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
			],
			'drupal' => [
				'drupal_root' => '/var/www/html/web',
				'entityTypeStorageMapping' => [
					'node' => 'Drupal\node\NodeStorage',
					'taxonomy_term' => 'Drupal\taxonomy\TermStorage',
					'user' => 'Drupal\user\UserStorage',
				],
			],
			'tmpDir' => '/var/www/html/temp/temp/upgrade_status/phpstan',
			'customRulesetUsed' => true,
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/var/www/html/temp/temp/upgrade_status/phpstan',
			'rootDir' => '/var/www/html/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/var/www/html/web',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => ['/var/www/html/web/../temp/upgrade_status/deprecation_testing.neon'],
			'analysedPaths' => ['/var/www/html/web/modules/contrib/panelbutton'],
			'composerAutoloaderProjectPaths' => ['/var/www/html/vendor/phpstan/phpstan/..'],
			'analysedPathsFromConfig' => [],
			'allCustomConfigFiles' => [
				'/var/www/html/web/../temp/upgrade_status/deprecation_testing.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/extension.neon',
				'/var/www/html/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
			],
			'usedLevel' => '0',
			'cliAutoloadFile' => null,
			'singleReflectionFile' => null,
			'__parametersSchema' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Structure', [
				"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00items" => [
					'bootstrap' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'bootstrapFiles' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludes_analyse' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_directories' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_files' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'level' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							\_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'paths' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'featureToggles' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'disableRuntimeReflectionProvider' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'closureUsesThis' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'randomIntParameters' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nullCoalesce' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'fileWhitespace' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'fileExtensions' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueCheckTypeFunctionCall' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueInstanceof' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueStrictComparison' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkClassCaseSensitivity' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixed' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionArgumentTypes' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionNameCase' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkGenericClassInNonGenericObjectType' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingIterableValueType' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingVarTagTypehint' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkArgumentsPassedByReference' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMaybeUndefinedVariables' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkNullables' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkThisOnly' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUnionTypes' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixedMissingReturn' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMissingReturn' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMethodSignatures' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExtraArguments' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingClosureNativeReturnTypehintRule' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingTypehints' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkTooWideReturnTypesInProtectedAndPublicMethods' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'inferPrivatePropertyTypeFromConstructor' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tipsOfTheDay' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybes' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybesInMethodSignatures' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportStaticMethodSignatures' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'parallel' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'jobSize' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'processTimeout' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'float',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'maximumNumberOfProcesses' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'minimumNumberOfJobsPerProcess' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'buffer' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'phpVersion' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [70100.0, 80000.0],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'polluteScopeWithLoopInitialAssignments' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithAlwaysIterableForeach' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteCatchScopeWithTryAssignments' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'treatPhpDocTypesAsCertain' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicMethods' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicProperties' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'ignoreErrors' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\AnyOf', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
								\_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								\_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'count' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'paths' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [
													null,
													null,
												],
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
												"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											]),
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
							],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'internalErrorsCountLimit' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cache' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'nodesByFileCountMax' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nodesByStringCountMax' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'reportUnmatchedIgnoredErrors' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scopeClass' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'typeAliases' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'universalObjectCratesClasses' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'stubFiles' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingMethodCalls' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingFunctionCalls' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'memoryLimitFile' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'staticReflectionClassNamePatterns' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'dynamicConstantNames' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'customRulesetUsed' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'rootDir' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tmpDir' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'currentWorkingDirectory' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliArgumentsVariablesRegistered' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'mixinExcludeClasses' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanFiles' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanDirectories' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'debugMode' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'productionMode' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempDir' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConfigFiles' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'allCustomConfigFiles' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPaths' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'composerAutoloaderProjectPaths' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPathsFromConfig' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'usedLevel' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliAutoloadFile' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'singleReflectionFile' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'drupal' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'drupal_root' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'entityTypeStorageMapping' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'__parametersSchema' => \_HumbugBox69342eed62ce\Nette\PhpGenerator\Dumper::createObject('_HumbugBox69342eed62ce\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00type" => '_HumbugBox69342eed62ce\Nette\Schema\Schema',
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
				],
				"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
				"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
				"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00required" => true,
				"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00default" => null,
				"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00before" => null,
				"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
				"\x00_HumbugBox69342eed62ce\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
			]),
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PhpParser\Lexer\Emulative
	{
		return new PhpParser\Lexer\Emulative;
	}


	public function createService03(): PhpParser\NodeTraverser
	{
		$service = new PhpParser\NodeTraverser;
		$service->addVisitor($this->getService('04'));
		return $service;
	}


	public function createService04(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver;
	}


	public function createService05(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('02'));
	}


	public function createService06(): PhpParser\PrettyPrinter\Standard
	{
		return new PhpParser\PrettyPrinter\Standard;
	}


	public function createService07(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('040'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService08(): PHPStan\Php\PhpVersion
	{
		return $this->getService('09')->create();
	}


	public function createService09(): PHPStan\Php\PhpVersionFactory
	{
		return new PHPStan\Php\PhpVersionFactory(null);
	}


	public function createService010(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService011(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('012'));
	}


	public function createService012(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser;
	}


	public function createService013(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('011'), $this->getService('012'));
	}


	public function createService014(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('086'));
	}


	public function createService015(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('019'), $this->getService('017'));
	}


	public function createService016(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('010'), $this->getService('013'));
	}


	public function createService017(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService018(): PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension
	{
		return new PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension(
			$this->getService('021'),
			$this->getService('reflectionProvider'),
			['scalar' => 'int|float|string|bool', 'number' => 'int|float']
		);
	}


	public function createService019(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver($this->getService('020'), $this->getService('034'));
	}


	public function createService020(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('034'));
	}


	public function createService021(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('010'), $this->getService('011'), $this->getService('019'));
	}


	public function createService022(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator(
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			$this->getService('036')
		);
	}


	public function createService023(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser($this->getService('024'), $this->getService('registry'), $this->getService('027'), 50);
	}


	public function createService024(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('026'),
			$this->getService('027'),
			$this->getService('045'),
			$this->getService('033'),
			$this->getService('040'),
			false
		);
	}


	public function createService025(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper(
			$this->getService('031'),
			$this->getService('040'),
			[
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			false
		);
	}


	public function createService026(): PHPStan\Analyser\LazyScopeFactory
	{
		return new PHPStan\Analyser\LazyScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('034'));
	}


	public function createService027(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('nodeScopeResolverClassReflector'),
			$this->getService('037'),
			$this->getService('045'),
			$this->getService('086'),
			$this->getService('014'),
			$this->getService('040'),
			$this->getService('typeSpecifier'),
			true,
			false,
			true,
			[],
			[]
		);
	}


	public function createService028(): PHPStan\Analyser\ResultCache\ResultCacheManager
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheManager(
			'/var/www/html/temp/temp/upgrade_status/phpstan/resultCache.php',
			[
				'/var/www/html/web/../temp/upgrade_status/deprecation_testing.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/extension.neon',
				'/var/www/html/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
			],
			['/var/www/html/web/modules/contrib/panelbutton'],
			['/var/www/html/vendor/phpstan/phpstan/..'],
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			'0',
			null
		);
	}


	public function createService029(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService030(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('023'),
			$this->getService('022'),
			$this->getService('043'),
			$this->getService('044'),
			$this->getService('028'),
			$this->getService('025'),
			'/var/www/html/temp/temp/upgrade_status/phpstan/.memory_limit',
			50
		);
	}


	public function createService031(): PHPStan\Command\IgnoredRegexValidator
	{
		return new PHPStan\Command\IgnoredRegexValidator($this->getService('regexParser'), $this->getService('021'));
	}


	public function createService032(): PHPStan\Dependency\DependencyDumper
	{
		return new PHPStan\Dependency\DependencyDumper(
			$this->getService('033'),
			$this->getService('027'),
			$this->getService('040'),
			$this->getService('045'),
			$this->getService('026'),
			$this->getService('042')
		);
	}


	public function createService033(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver($this->getService('reflectionProvider'));
	}


	public function createService034(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('035'));
	}


	public function createService035(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService036(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/var/www/html/web',
			'/var/www/html/temp/temp/upgrade_status/phpstan',
			['/var/www/html/web/../temp/upgrade_status/deprecation_testing.neon'],
			['/var/www/html/web/modules/contrib/panelbutton'],
			['/var/www/html/vendor/phpstan/phpstan/..'],
			[],
			[
				'/var/www/html/web/../temp/upgrade_status/deprecation_testing.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/extension.neon',
				'/var/www/html/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
			],
			'0'
		);
	}


	public function createService037(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('034'));
	}


	public function createService038(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('034'));
	}


	public function createService039(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('034'));
	}


	public function createService040(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/var/www/html/web');
	}


	public function createService041(): PHPStan\File\FileExcluder
	{
		return new PHPStan\File\FileExcluder(
			$this->getService('040'),
			[
				'*.api.php',
				'*/tests/fixtures/*.php',
				'*/tests/Drupal/Tests/Listeners/Legacy/*',
				'*/tests/fixtures/*.php',
				'*/settings*.php',
			],
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			]
		);
	}


	public function createService042(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('041'),
			$this->getService('040'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createService043(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 60.0, 134217728);
	}


	public function createService044(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService045(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('directParser'), 512, 512);
	}


	public function createService046(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService047(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_e86274b9e9 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				$filename
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('045'),
					$this->container->getService('046'),
					$this->container->getService('029'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename
				);
			}
		};
	}


	public function createService048(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension($this->getService('086'));
	}


	public function createService049(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension($this->getService('086'));
	}


	public function createService050(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService051(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('050'),
			$this->getService('phpParserDecorator')
		);
	}


	public function createService052(): PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator($this->getService('051'));
	}


	public function createService053(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('055'),
			$this->getService('058'),
			$this->getService('056')
		);
	}


	public function createService054(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory {
			private $container;


			public function __construct(Container_e86274b9e9 $container)
			{
				$this->container = $container;
			}


			public function create(string $directory): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocator(
					$this->container->getService('051'),
					$this->container->getService('042'),
					$directory
				);
			}
		};
	}


	public function createService055(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('054'));
	}


	public function createService056(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_e86274b9e9 $container)
			{
				$this->container = $container;
			}


			public function create(_HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('058'));
			}
		};
	}


	public function createService057(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_e86274b9e9 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('051'),
					$fileName
				);
			}
		};
	}


	public function createService058(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('057'));
	}


	public function createService059(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService060(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService061(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('026'),
			$this->getService('027'),
			$this->getService('062'),
			$this->getService('014'),
			$this->getService('048'),
			$this->getService('049'),
			$this->getService('067'),
			$this->getService('045'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('reflectionProvider'),
			false,
			['stdClass']
		);
	}


	public function createService062(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_e86274b9e9 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $stubPhpDocString
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('045'),
					$this->container->getService('046'),
					$this->container->getService('029'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$stubPhpDocString
				);
			}
		};
	}


	public function createService063(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass']);
	}


	public function createService064(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('034'));
	}


	public function createService065(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider($this->getService('067'));
	}


	public function createService066(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('021'));
	}


	public function createService067(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProvider($this->getService('066'));
	}


	public function createService068(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'));
	}


	public function createService069(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('070'), true);
	}


	public function createService070(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService071(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck($this->getService('084'), false, false, false, false);
	}


	public function createService072(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck($this->getService('reflectionProvider'), $this->getService('068'), false, true);
	}


	public function createService073(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('084'));
	}


	public function createService074(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			$this->getService('077'),
			false
		);
	}


	public function createService075(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService076(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('068'),
			['scalar' => 'int|float|string|bool', 'number' => 'int|float'],
			false
		);
	}


	public function createService077(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService078(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('081'), $this->getService('082'));
	}


	public function createService079(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService080(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck($this->getService('reflectionProvider'), false, false);
	}


	public function createService081(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService082(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService083(): PHPStan\Rules\RegistryFactory
	{
		return new PHPStan\Rules\RegistryFactory($this->getService('034'));
	}


	public function createService084(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), false, true, false);
	}


	public function createService085(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck;
	}


	public function createService086(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('064'),
			$this->getService('045'),
			$this->getService('016'),
			$this->getService('015'),
			$this->getService('029'),
			$this->getService('07')
		);
	}


	public function createService087(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService088(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension;
	}


	public function createService089(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
	}


	public function createService090(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService091(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService092(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService093(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService094(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService095(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
	}


	public function createService096(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService097(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService098(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService099(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0100(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0101(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0102(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
	}


	public function createService0103(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
	}


	public function createService0104(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0105(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0106(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0107(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0108(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0109(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0110(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0111(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0112(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0113(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension;
	}


	public function createService0114(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension;
	}


	public function createService0115(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0116(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0117(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0118(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0119(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0120(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0121(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0122(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('082'));
	}


	public function createService0123(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService0124(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService0125(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0126(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0127(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
	}


	public function createService0128(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension;
	}


	public function createService0129(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0130(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0131(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0132(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0133(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0134(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0136(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0137(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0138(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0139(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0140(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService0141(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0142(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
	}


	public function createService0143(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
	}


	public function createService0144(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
	}


	public function createService0145(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0146(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
	}


	public function createService0147(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0121'));
	}


	public function createService0148(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
	}


	public function createService0149(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
	}


	public function createService0150(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0151(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
	}


	public function createService0152(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
	}


	public function createService0153(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
	}


	public function createService0154(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
	}


	public function createService0155(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
	}


	public function createService0156(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
	}


	public function createService0157(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0158(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(true);
	}


	public function createService0159(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0160(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
	}


	public function createService0161(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0162(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0163(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('0165'),
			$this->getService('0166'),
			$this->getService('058'),
			$this->getService('055'),
			$this->getService('053'),
			$this->getService('052'),
			$this->getService('034'),
			[],
			[],
			[],
			[],
			['/var/www/html/web/modules/contrib/panelbutton'],
			['/var/www/html/vendor/phpstan/phpstan/..'],
			[],
			$this->parameters['singleReflectionFile'],
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#']
		);
	}


	public function createService0164(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_e86274b9e9 $container)
			{
				$this->container = $container;
			}


			public function create(
				_HumbugBox69342eed62ce\Roave\BetterReflection\Reflector\FunctionReflector $functionReflector,
				_HumbugBox69342eed62ce\Roave\BetterReflection\Reflector\ClassReflector $classReflector,
				_HumbugBox69342eed62ce\Roave\BetterReflection\Reflector\ConstantReflector $constantReflector
			): PHPStan\Reflection\BetterReflection\BetterReflectionProvider {
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('064'),
					$this->container->getService('037'),
					$classReflector,
					$this->container->getService('086'),
					$this->container->getService('065'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('047'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('07'),
					$this->container->getService('06'),
					$this->container->getService('040'),
					$functionReflector,
					$constantReflector
				);
			}
		};
	}


	public function createService0165(): _HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return new _HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber($this->getService('phpParserDecorator'));
	}


	public function createService0166(): _HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new _HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0167(): PHPStan\Drupal\ServiceMap
	{
		return new PHPStan\Drupal\ServiceMap;
	}


	public function createService0168(): PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension
	{
		return new PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension([
			'node' => 'Drupal\node\NodeStorage',
			'taxonomy_term' => 'Drupal\taxonomy\TermStorage',
			'user' => 'Drupal\user\UserStorage',
		]);
	}


	public function createService0169(): PHPStan\Type\ServiceDynamicReturnTypeExtension
	{
		return new PHPStan\Type\ServiceDynamicReturnTypeExtension($this->getService('0167'));
	}


	public function createService0170(): PHPStan\Reflection\EntityFieldsViaMagicReflectionExtension
	{
		return new PHPStan\Reflection\EntityFieldsViaMagicReflectionExtension;
	}


	public function createService0171(): PHPStan\Rules\Deprecations\DeprecatedClassHelper
	{
		return new PHPStan\Rules\Deprecations\DeprecatedClassHelper($this->getService('broker'));
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('064'),
			$this->getService('037'),
			$this->getService('betterReflectionClassReflector'),
			$this->getService('086'),
			$this->getService('065'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('047'),
			$this->getService('relativePathHelper'),
			$this->getService('07'),
			$this->getService('06'),
			$this->getService('040'),
			$this->getService('betterReflectionFunctionReflector'),
			$this->getService('betterReflectionConstantReflector')
		);
	}


	public function createServiceBetterReflectionSourceLocator(): _HumbugBox69342eed62ce\Roave\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0163')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('034'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/var/www/html/temp/temp/upgrade_status/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_e86274b9e9
	{
		return $this;
	}


	public function createServiceDirectParser(): PHPStan\Parser\DirectParser
	{
		return new PHPStan\Parser\DirectParser($this->getService('05'), $this->getService('03'));
	}


	public function createServiceErrorFormatter__baselineNeon(): PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter(
			$this->getService('simpleRelativePathHelper'),
			$this->getService('errorFormatter.table')
		);
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'), true);
	}


	public function createServiceInnerRuntimeReflectionProvider(): PHPStan\Reflection\Runtime\RuntimeReflectionProvider
	{
		return new PHPStan\Reflection\Runtime\RuntimeReflectionProvider(
			$this->getService('064'),
			$this->getService('037'),
			$this->getService('047'),
			$this->getService('086'),
			$this->getService('065'),
			$this->getService('06'),
			$this->getService('07'),
			$this->getService('040'),
			$this->getService('relativePathHelper'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createServiceNodeScopeResolverClassReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector
	{
		return $this->getService('betterReflectionClassReflector');
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('045'));
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory(
			$this->getService('runtimeReflectionProvider'),
			$this->getService('betterReflectionProvider'),
			false
		);
	}


	public function createServiceRegexGrammarStream(): Hoa\File\Read
	{
		return new Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
	}


	public function createServiceRegexParser(): Hoa\Compiler\Llk\Parser
	{
		return Hoa\Compiler\Llk\Llk::load($this->getService('regexGrammarStream'));
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		return $this->getService('083')->create();
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper('/var/www/html/web', ['/var/www/html/web/modules/contrib/panelbutton']);
	}


	public function createServiceRules__0(): PHPStan\Rules\Classes\PluginManagerInspectionRule
	{
		return new PHPStan\Rules\Classes\PluginManagerInspectionRule;
	}


	public function createServiceRules__1(): PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule
	{
		return new PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule;
	}


	public function createServiceRules__10(): PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule(
			$this->getService('broker'),
			$this->getService('084')
		);
	}


	public function createServiceRules__11(): PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule
	{
		return new PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__12(): PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule($this->getService('broker'));
	}


	public function createServiceRules__13(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule($this->getService('broker'));
	}


	public function createServiceRules__14(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule($this->getService('broker'));
	}


	public function createServiceRules__15(): PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule($this->getService('broker'), $this->getService('084'));
	}


	public function createServiceRules__16(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule($this->getService('0171'));
	}


	public function createServiceRules__17(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule($this->getService('0171'));
	}


	public function createServiceRules__18(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule($this->getService('0171'));
	}


	public function createServiceRules__19(): PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule;
	}


	public function createServiceRules__2(): PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule
	{
		return new PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule;
	}


	public function createServiceRules__20(): PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule($this->getService('broker'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule
	{
		return new PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule;
	}


	public function createServiceRules__4(): PHPStan\Rules\Deprecations\AccessDeprecatedConstant
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedConstant($this->getService('broker'));
	}


	public function createServiceRules__5(): PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule($this->getService('broker'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule($this->getService('broker'), $this->getService('084'));
	}


	public function createServiceRules__7(): PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule($this->getService('broker'));
	}


	public function createServiceRules__8(): PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule($this->getService('broker'));
	}


	public function createServiceRules__9(): PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule($this->getService('broker'), $this->getService('084'));
	}


	public function createServiceRuntimeReflectionProvider(): PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider(
			$this->getService('innerRuntimeReflectionProvider'),
			$this->getService('0165'),
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			null
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/var/www/html/web');
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('045'),
			$this->getService('086'),
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			]
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('034'));
	}


	public function initialize()
	{
	}
}
