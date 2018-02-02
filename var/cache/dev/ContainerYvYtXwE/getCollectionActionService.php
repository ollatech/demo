<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Olla\Platform\Action\CollectionAction' shared service.

include_once $this->targetDirs[3].'/vendor/olla/flow/src/Operation/OperationInterface.php';
include_once $this->targetDirs[3].'/vendor/olla/flow/src/Operation/AbstractOperation.php';
include_once $this->targetDirs[3].'/vendor/olla/platform/src/Action/CollectionAction.php';

return $this->services['Olla\Platform\Action\CollectionAction'] = new \Olla\Platform\Action\CollectionAction(($this->services['Olla\Platform\Service\QueryService'] ?? $this->load(__DIR__.'/getQueryServiceService.php')));
