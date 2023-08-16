<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerAZ0S9d6\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerAZ0S9d6/EntityManagerGhostEbeb667.php';
require __DIR__.'/ContainerAZ0S9d6/RequestPayloadValueResolverGhost3590451.php';
require __DIR__.'/ContainerAZ0S9d6/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerAZ0S9d6/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerAZ0S9d6/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerAZ0S9d6/getValidator_WhenService.php';
require __DIR__.'/ContainerAZ0S9d6/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerAZ0S9d6/getValidator_NoSuspiciousCharactersService.php';
require __DIR__.'/ContainerAZ0S9d6/getValidator_ExpressionService.php';
require __DIR__.'/ContainerAZ0S9d6/getValidator_EmailService.php';
require __DIR__.'/ContainerAZ0S9d6/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerAZ0S9d6/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerAZ0S9d6/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerAZ0S9d6/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerAZ0S9d6/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerAZ0S9d6/getSession_FactoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getServicesResetterService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_UserCheckerService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Firewall_EventDispatcherLocatorService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Authenticator_ManagersLocatorService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_Authenticator_Manager_MainService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getSecrets_VaultService.php';
require __DIR__.'/ContainerAZ0S9d6/getRouting_LoaderService.php';
require __DIR__.'/ContainerAZ0S9d6/getPropertyAccessorService.php';
require __DIR__.'/ContainerAZ0S9d6/getMailer_TransportsService.php';
require __DIR__.'/ContainerAZ0S9d6/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerAZ0S9d6/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerAZ0S9d6/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerAZ0S9d6/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerAZ0S9d6/getMailer_MailerService.php';
require __DIR__.'/ContainerAZ0S9d6/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_TypeExtension_Password_PasswordHasherService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_TypeExtension_Form_PasswordHasherService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_Type_FormService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_Type_FileService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_Type_EntityService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_Type_ColorService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_ServerParamsService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_RegistryService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_Listener_PasswordHasherService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_FactoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerAZ0S9d6/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerAZ0S9d6/getErrorControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerAZ0S9d6/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerAZ0S9d6/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerAZ0S9d6/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerAZ0S9d6/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerAZ0S9d6/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerAZ0S9d6/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerAZ0S9d6/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerAZ0S9d6/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerAZ0S9d6/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerAZ0S9d6/getCache_SystemClearerService.php';
require __DIR__.'/ContainerAZ0S9d6/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerAZ0S9d6/getCache_AppClearerService.php';
require __DIR__.'/ContainerAZ0S9d6/getTemplateControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getRedirectControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getProfilerControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getUserAuthenticatorService.php';
require __DIR__.'/ContainerAZ0S9d6/getUserRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getReviewRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getProductRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getOrderedItemRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getOrderRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getOrderItemRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getContactRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getCategoryRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getArticleRepositoryService.php';
require __DIR__.'/ContainerAZ0S9d6/getUserTypeService.php';
require __DIR__.'/ContainerAZ0S9d6/getReviewTypeService.php';
require __DIR__.'/ContainerAZ0S9d6/getProductTypeService.php';
require __DIR__.'/ContainerAZ0S9d6/getOrderTypeService.php';
require __DIR__.'/ContainerAZ0S9d6/getContactTypeService.php';
require __DIR__.'/ContainerAZ0S9d6/getCategoryTypeService.php';
require __DIR__.'/ContainerAZ0S9d6/getCartConfirmationTypeService.php';
require __DIR__.'/ContainerAZ0S9d6/getArticleTypeService.php';
require __DIR__.'/ContainerAZ0S9d6/getUserSecurityControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getTestStripeControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getReviewControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getRegisterControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getPublicControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getProductControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getOrderControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getMailerControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getContactControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getCategoryControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getCartControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getArticleControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getAdminSecurityControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/getCartServiceService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_YXwGmc1Service.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_UVvF4gLService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_U8T0ln3Service.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_RSTd_NAService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_JyDnMd0Service.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_HeXyn7hService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_B12wXHrService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_Yg8pfWRService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_M3Xv59DService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_ILmuIG4Service.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_Gpq0cWWService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_DZowHzbService.php';
require __DIR__.'/ContainerAZ0S9d6/get_ServiceLocator_4n4ylFvService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Security_RequestMatcher_KLbKLHaService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_Security_UserValueResolverService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_Security_SecurityTokenValueResolverService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerAZ0S9d6/get_Debug_Security_Voter_Security_Access_AuthenticatedVoterService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\Mailer\DataCollector\MessageDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Cart\CartService';
$classes[] = 'App\Controller\AdminSecurityController';
$classes[] = 'App\Controller\ArticleController';
$classes[] = 'App\Controller\CartController';
$classes[] = 'App\Controller\CategoryController';
$classes[] = 'App\Controller\ContactController';
$classes[] = 'App\Controller\MailerController';
$classes[] = 'App\Controller\OrderController';
$classes[] = 'App\Controller\ProductController';
$classes[] = 'App\Controller\PublicController';
$classes[] = 'App\Controller\RegisterController';
$classes[] = 'App\Controller\ReviewController';
$classes[] = 'App\Controller\TestStripeController';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security';
$classes[] = 'App\Controller\UserSecurityController';
$classes[] = 'App\Form\ArticleType';
$classes[] = 'App\Form\CartConfirmationType';
$classes[] = 'App\Form\CategoryType';
$classes[] = 'App\Form\ContactType';
$classes[] = 'App\Form\OrderType';
$classes[] = 'App\Form\ProductType';
$classes[] = 'App\Form\ReviewType';
$classes[] = 'App\Form\UserType';
$classes[] = 'App\Repository\ArticleRepository';
$classes[] = 'App\Repository\CategoryRepository';
$classes[] = 'App\Repository\ContactRepository';
$classes[] = 'App\Repository\OrderItemRepository';
$classes[] = 'App\Repository\OrderRepository';
$classes[] = 'App\Repository\OrderedItemRepository';
$classes[] = 'App\Repository\ProductRepository';
$classes[] = 'App\Repository\ReviewRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\UserAuthenticator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessengerTransportListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

$preloaded = Preloader::preload($classes);
