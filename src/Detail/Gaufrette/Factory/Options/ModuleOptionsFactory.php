<?php

namespace Detail\Gaufrette\Factory\Options;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use Detail\Gaufrette\Options\ModuleOptions;

use RuntimeException;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * @return ModuleOptions
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        if (!isset($config['gaufrette'])) {
            throw new RuntimeException('Config for Gaufrette is not set');
        }

        return new ModuleOptions($config['gaufrette']);
    }
}
