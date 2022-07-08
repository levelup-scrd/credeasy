<?php

namespace Sicredi\Credeasy\Persistence;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    public static function getEntityManager(): EntityManager
    {
        $configuracoesDeConexao = [
            'host' => '127.0.0.1',
            'dbname' => 'credeasy',
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => '',
            'port' => '3307'
        ];

        $diretorioRaiz = __DIR__ . '/../..';
        $diretorioDeScaneamento = $diretorioRaiz . '/src';
        $devMode = true;

        $configuracoesDoDoctrine = Setup::createAnnotationMetadataConfiguration(
            [$diretorioDeScaneamento], $devMode
        );

        return EntityManager::create($configuracoesDeConexao, $configuracoesDoDoctrine);
    }
}
