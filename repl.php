<?php

use Dapr\App;
use DI\ContainerBuilder;

require_once __DIR__.'/vendor/autoload.php';

$app = App::create(configure: fn(ContainerBuilder $builder) => $builder->addDefinitions(__DIR__.'/src/config.php'));

