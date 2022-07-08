<?php

use Sicredi\Credeasy\Persistencia\EntityManagerFactory;

require_once __DIR__ . '/vendor/autoload.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    EntityManagerFactory::getEntityManager()
);
