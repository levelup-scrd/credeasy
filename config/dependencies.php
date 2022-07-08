<?php

use Sicredi\Credeasy\Persistencia\EntityManagerFactory;

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    \Doctrine\ORM\EntityManager::class => function () {
        return EntityManagerFactory::getEntityManager();
    }
]);

$container = $builder->build();

return $container;
