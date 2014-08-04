<?php

namespace Detail\Gaufrette\Factory\Adapter;

use Zend\ServiceManager\ServiceLocatorInterface;

use Gaufrette\Adapter\Local as Adapter;

use Detail\Gaufrette\Options\Adapter\LocalAdapterOptions as Options;

class LocalAdapterFactory implements
    AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function createAdapter(ServiceLocatorInterface $serviceLocator, array $config)
    {
        $options = new Options($config);
        $adapter = new Adapter($options->getDirectory(), $options->getCreate(), $options->getMode());

        return $adapter;
    }
}
