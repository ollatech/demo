<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.app_clearer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ($this->services['cache.app'] ?? $this->load(__DIR__.'/getCache_AppService.php')), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->load(__DIR__.'/getDoctrine_ResultCachePoolService.php'))));
