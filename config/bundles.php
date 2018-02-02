<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Olla\Flow\OllaFlowBundle::class => ['all' => true],
    Olla\Api\OllaApiBundle::class => ['all' => true],
    Olla\Platform\OllaPlatformBundle::class => ['all' => true],
    Olla\Admin\OllaAdminBundle::class => ['all' => true],
    Olla\Frontend\OllaFrontendBundle::class => ['all' => true],
    Olla\Graphql\OllaGraphqlBundle::class => ['all' => true],
    Olla\Orm\OllaOrmBundle::class => ['all' => true],
    Olla\Demo\OllaDemoBundle::class => ['all' => true],
    Nelmio\Alice\Bridge\Symfony\NelmioAliceBundle::class => ['dev' => true, 'test' => true],
    Fidry\AliceDataFixtures\Bridge\Symfony\FidryAliceDataFixturesBundle::class => ['dev' => true, 'test' => true],
    Hautelook\AliceBundle\HautelookAliceBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true]
];
