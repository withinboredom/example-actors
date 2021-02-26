<?php

use Dapr\App;
use DI\ContainerBuilder;

require_once __DIR__.'/../vendor/autoload.php';
error_log($_SERVER['REQUEST_URI'], E_USER_WARNING);
$app = App::create(configure: fn(ContainerBuilder $builder) => $builder->addDefinitions(__DIR__.'/config.php'));

$app->start();
