<?php

namespace Detail\Gaufrette\Factory\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use Detail\Gaufrette\Service\FilesystemService;

class FilesystemServiceFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * @return FilesystemService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var \Detail\Gaufrette\Options\ModuleOptions $options */
        $options = $serviceLocator->get('Detail\Gaufrette\Options\ModuleOptions');

        $adapters = array();

        foreach ($options->getAdapters() as $name => $adapter) {
            /** @var \Detail\Gaufrette\Options\AdapterOptions $adapter */
            var_dump($adapter->getType(), $adapter->getOptions());

            /** @todo Create adapters (use factory for each type) */
        }

        $filesystems = array();

        foreach ($options->getFilesystems() as $filesystem) {

        }

        return new FilesystemService($filesystems);
    }
}
