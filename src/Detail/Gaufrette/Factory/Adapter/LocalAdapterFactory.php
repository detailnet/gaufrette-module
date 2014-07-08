<?php

namespace Detail\Gaufrette\Factory\Adapter;

use Zend\ServiceManager\ServiceLocatorInterface;

use Gaufrette\Adapter\Local as Adapter;

use Detail\Gaufrette\Options\Adapter\LocalAdapterOptions as Options;

class LocalAdapterFactory
{
    /**
     * {@inheritDoc}
     */
    public function createAdapter(ServiceLocatorInterface $serviceLocator, array $config)
    {
//        /** @var \Detail\Gaufrette\Options\ModuleOptions $moduleOptions */
//        $moduleOptions = $serviceLocator->get('Detail\Bernard\Options\ModuleOptions');

        $options = new Options($config);
        $adapter = new Adapter($options->getDirectory(), $options->getCreate(), $options->getMode());

        return $adapter;
    }
}
