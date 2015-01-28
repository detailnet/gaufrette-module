<?php

namespace Detail\Gaufrette\Factory\Adapter;

use Zend\ServiceManager\ServiceLocatorInterface;

interface AdapterInterface
{
    /**
     * Create adapter.
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param array $config
     * @return \Gaufrette\Adapter
     */
    public function createAdapter(ServiceLocatorInterface $serviceLocator, array $config);
}
