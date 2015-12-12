<?php 
namespace Lazyphp\Core {
Class RestException extends \Exception {}
Class RouteException extends \Lazyphp\Core\RestException {}
Class InputException extends \Lazyphp\Core\RestException {}
Class DatabaseException extends \Lazyphp\Core\RestException {}
Class DataException extends \Lazyphp\Core\RestException {}
Class AuthException extends \Lazyphp\Core\RestException {}
Class TmplateException extends \Lazyphp\Core\RestException {}
Class RpwtException extends \Lazyphp\Core\RestException {}
}
namespace{
$GLOBALS['meta'] = array (
  'ca258712378e83c61c5dc72a2fb14638' => 
  array (
    'Description' => 
    array (
      0 => 
      array (
        'section' => 'Demo',
        'description' => '默认提示',
      ),
    ),
    'LazyRoute' => 
    array (
      0 => 
      array (
        'route' => 'GET /about/',
        'ApiMethod' => '(type="GET")',
        'ApiRoute' => '(name="/about/")',
      ),
    ),
    'Return' => 
    array (
      0 => 
      array (
        'type' => 'object',
        'sample' => '{\'code\': 0,\'message\': \'success\'}',
      ),
    ),
    'binding' => false,
    'route' => 
    array (
      0 => 
      array (
        'uri' => 'GET /about/',
        'params' => false,
      ),
    ),
  ),
  '120345ad1b3eb4bc207c17ad1a47fcbb' => 
  array (
    'Description' => 
    array (
      0 => 
      array (
        'section' => 'Demo',
        'description' => '默认提示',
      ),
    ),
    'LazyRoute' => 
    array (
      0 => 
      array (
        'route' => 'GET /about/',
        'ApiMethod' => '(type="GET")',
        'ApiRoute' => '(name="/about/")',
      ),
    ),
    'Return' => 
    array (
      0 => 
      array (
        'type' => 'object',
        'sample' => '{\'code\': 0,\'message\': \'success\'}',
      ),
    ),
    'binding' => false,
    'route' => 
    array (
      0 => 
      array (
        'uri' => 'GET /about/',
        'params' => false,
      ),
    ),
  ),
  'ba4d7ed8dd44c2b8bfbfaffd810c054a' => 
  array (
    'Description' => 
    array (
      0 => 
      array (
        'section' => 'Demo',
        'description' => '默认提示',
      ),
    ),
    'LazyRoute' => 
    array (
      0 => 
      array (
        'route' => 'GET /about/',
        'ApiMethod' => '(type="GET")',
        'ApiRoute' => '(name="/about/")',
      ),
    ),
    'Return' => 
    array (
      0 => 
      array (
        'type' => 'object',
        'sample' => '{\'code\': 0,\'message\': \'success\'}',
      ),
    ),
    'binding' => false,
    'route' => 
    array (
      0 => 
      array (
        'uri' => 'GET /about/',
        'params' => false,
      ),
    ),
  ),
  '1f76bda154ef49bc25d0d791c765c308' => 
  array (
    'Description' => 
    array (
      0 => 
      array (
        'section' => 'Demo',
        'description' => '系统提示',
      ),
    ),
    'LazyRoute' => 
    array (
      0 => 
      array (
        'route' => 'GET /info',
        'ApiMethod' => '(type="GET")',
        'ApiRoute' => '(name="/info")',
      ),
    ),
    'Return' => 
    array (
      0 => 
      array (
        'type' => 'object',
        'sample' => '{\'code\': 0,\'message\': \'success\'}',
      ),
    ),
    'binding' => false,
    'route' => 
    array (
      0 => 
      array (
        'uri' => 'GET /info',
        'params' => false,
      ),
    ),
  ),
  '6c21a0279f50eeb2c6644c2cc37275ab' => 
  array (
    'Description' => 
    array (
      0 => 
      array (
        'section' => 'Demo',
        'description' => '乘法接口',
      ),
    ),
    'LazyRoute' => 
    array (
      0 => 
      array (
        'route' => 'GET /demo/times',
        'ApiMethod' => '(type="GET")',
        'ApiRoute' => '(name="/demo/times")',
      ),
    ),
    'Params' => 
    array (
      0 => 
      array (
        'name' => 'first',
        'filters' => 
        array (
          0 => 'check_not_empty',
        ),
        'cnname' => '第一个数',
      ),
      1 => 
      array (
        'name' => 'second',
        'filters' => 
        array (
          0 => 'check_not_empty',
        ),
        'cnname' => '第二个数',
      ),
    ),
    'Return' => 
    array (
      0 => 
      array (
        'type' => 'object',
        'sample' => '{\'code\': 0,\'message\': \'success\'}',
      ),
    ),
    'binding' => 
    array (
      'first' => 
      array (
        'name' => 'first',
      ),
      'second' => 
      array (
        'name' => 'second',
      ),
    ),
    'route' => 
    array (
      0 => 
      array (
        'uri' => 'GET /demo/times',
        'params' => false,
      ),
    ),
  ),
  'f496b811f8e4819a63ae6d1f63922d0d' => 
  array (
    'Description' => 
    array (
      0 => 
      array (
        'section' => 'Demo',
        'description' => '默认提示',
      ),
    ),
    'LazyRoute' => 
    array (
      0 => 
      array (
        'route' => 'GET /',
        'ApiMethod' => '(type="GET")',
        'ApiRoute' => '(name="/")',
      ),
    ),
    'Return' => 
    array (
      0 => 
      array (
        'type' => 'object',
        'sample' => '{\'code\': 0,\'message\': \'success\'}',
      ),
    ),
    'binding' => false,
    'route' => 
    array (
      0 => 
      array (
        'uri' => 'GET /',
        'params' => false,
      ),
    ),
  ),
  '8f9fef4f4860807eed18755df676c378' => 
  array (
    'Description' => 
    array (
      0 => 
      array (
        'section' => 'Demo',
        'description' => '系统提示',
      ),
    ),
    'LazyRoute' => 
    array (
      0 => 
      array (
        'route' => 'GET /info',
        'ApiMethod' => '(type="GET")',
        'ApiRoute' => '(name="/info")',
      ),
    ),
    'Return' => 
    array (
      0 => 
      array (
        'type' => 'object',
        'sample' => '{\'code\': 0,\'message\': \'success\'}',
      ),
    ),
    'binding' => false,
    'route' => 
    array (
      0 => 
      array (
        'uri' => 'GET /info',
        'params' => false,
      ),
    ),
  ),
  'e0fea412e18ff2d57eb99085c2542045' => 
  array (
    'Description' => 
    array (
      0 => 
      array (
        'section' => 'Demo',
        'description' => '乘法接口',
      ),
    ),
    'LazyRoute' => 
    array (
      0 => 
      array (
        'route' => 'GET /demo/times',
        'ApiMethod' => '(type="GET")',
        'ApiRoute' => '(name="/demo/times")',
      ),
    ),
    'Params' => 
    array (
      0 => 
      array (
        'name' => 'first',
        'filters' => 
        array (
          0 => 'check_not_empty',
        ),
        'cnname' => '第一个数',
      ),
      1 => 
      array (
        'name' => 'second',
        'filters' => 
        array (
          0 => 'check_not_empty',
        ),
        'cnname' => '第二个数',
      ),
    ),
    'Return' => 
    array (
      0 => 
      array (
        'type' => 'object',
        'sample' => '{\'code\': 0,\'message\': \'success\'}',
      ),
    ),
    'binding' => 
    array (
      'first' => 
      array (
        'name' => 'first',
      ),
      'second' => 
      array (
        'name' => 'second',
      ),
    ),
    'route' => 
    array (
      0 => 
      array (
        'uri' => 'GET /demo/times',
        'params' => false,
      ),
    ),
  ),
);
$app = new \Lazyphp\Core\Application();
$app->route('GET /about/',array( 'Lazyphp\Controller\AboutController','index'));
$app->route('GET /about/',array( 'Lazyphp\Controller\AboutController','about'));
$app->route('GET /about/',array( 'Lazyphp\Controller\AboutController','team'));
$app->route('GET /info',array( 'Lazyphp\Controller\AboutController','info'));
$app->route('GET /demo/times',array( 'Lazyphp\Controller\AboutController','demo'));
$app->route('GET /',array( 'Lazyphp\Controller\CacController','index'));
$app->route('GET /info',array( 'Lazyphp\Controller\CacController','info'));
$app->route('GET /demo/times',array( 'Lazyphp\Controller\CacController','demo'));
$app->run();
}
