<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hautelook_alice.data_fixtures.purge_loader' shared service.

include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/Loader/FileResolverLoader.php';
include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/FileResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/hautelook/alice-bundle/src/Resolver/File/KernelFileResolver.php';

return $this->services['hautelook_alice.data_fixtures.purge_loader'] = new \Fidry\AliceDataFixtures\Loader\FileResolverLoader(($this->services['fidry_alice_data_fixtures.loader.doctrine'] ?? $this->load(__DIR__.'/getFidryAliceDataFixtures_Loader_DoctrineService.php')), ($this->services['hautelook_alice.resolver.file'] ?? $this->services['hautelook_alice.resolver.file'] = new \Hautelook\AliceBundle\Resolver\File\KernelFileResolver(($this->services['kernel'] ?? $this->get('kernel')))));
