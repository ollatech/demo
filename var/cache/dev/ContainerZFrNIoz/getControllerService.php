<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Olla\Api\Controller\Controller' shared service.

include_once $this->targetDirs[3].'/vendor/olla/flow/src/Operation/OperationInterface.php';
include_once $this->targetDirs[3].'/vendor/olla/flow/src/Operation/AbstractOperation.php';
include_once $this->targetDirs[3].'/vendor/olla/flow/src/Operation/Operation.php';
include_once $this->targetDirs[3].'/vendor/olla/api/src/Controller/Controller.php';

return $this->services['Olla\Api\Controller\Controller'] = new \Olla\Api\Controller\Controller(new \Olla\Flow\Operation\Operation(($this->privates['Olla\Flow\Config'] ?? $this->load(__DIR__.'/getConfigService.php')), ($this->privates['Olla\Flow\Service\Service'] ?? $this->load(__DIR__.'/getServiceService.php'))));
