<?php
require_once "vendor/autoload.php";

function getEntityManager() : \Doctrine\ORM\EntityManager
{
    $entityManager = null;

    if ($entityManager === null)
    {
        // Setup Doctrine
        $configuration = Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
            $paths = [__DIR__ . '/src/lib'],
            $isDevMode = true
        );

        // Setup connection parameters
        $connection_parameters = [
            'dbname' => 'blog',
            'user' => 'root',
            'password' => 'root',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'
        ];

        // Get the entity manager
        $entityManager = Doctrine\ORM\EntityManager::create($connection_parameters, $configuration);
    }

    return $entityManager;
}
