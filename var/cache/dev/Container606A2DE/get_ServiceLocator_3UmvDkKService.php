<?php

namespace Container606A2DE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3UmvDkKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3UmvDkK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3UmvDkK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'quoteRepository' => ['privates', 'App\\Repository\\QuoteRepository', 'getQuoteRepositoryService', true],
        ], [
            'quoteRepository' => 'App\\Repository\\QuoteRepository',
        ]);
    }
}
