<?php
//Constantes
$configs = new HXPHP\System\Configs\Config;
ActiveRecord\Connection::$datetime_format = 'Y-m-d H:i:s';

//Configurações de Ambiente - Desenvolvimento
  $configs->env->add('development');

  $configs->env->development->baseURI = '/hxphp/';

  $configs->env->development->database->setConnectionData([
  'host' => 'localhost',
  'user' => 'root',
  'password' => '',
  'dbname' => 'sistema',
  ]);

return $configs;