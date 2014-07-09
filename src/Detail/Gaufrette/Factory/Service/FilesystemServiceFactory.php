<?php

namespace Detail\Gaufrette\Factory\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use Gaufrette\Filesystem;

use Detail\Gaufrette\Service\FilesystemService;

use RuntimeException;

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

        $adapterFactories = $options->getAdapterFactories();
        $adapters = array();

        foreach ($options->getAdapters() as $name => $adapter) {
            /** @var \Detail\Gaufrette\Options\AdapterOptions $adapter */

            if (!isset($adapterFactories[$adapter->getType()])) {
                throw new RuntimeException(
                    sprintf('No factory configured for adapter type "%s"', $adapter->getType())
                );
            }

            $adapterFactoryClass = $adapterFactories[$adapter->getType()];

            if (!class_exists($adapterFactoryClass)) {
                throw new RuntimeException(
                    sprintf(
                        'Adapter factory class "%s" does not exist for type "%s"',
                        $adapterFactoryClass, $adapter->getType()
                    )
                );
            }

            /** @var \Detail\Gaufrette\Factory\Adapter\AdapterInterface $adapterFactory */
            $adapterFactory = new $adapterFactoryClass();

            $adapters[$name] = $adapterFactory->createAdapter(
                $serviceLocator, $adapter->getOptions()
            );
        }

        $filesystems = array();

        foreach ($options->getFilesystems() as $name => $filesystem) {
            /** @var \Detail\Gaufrette\Options\FilesystemOptions $filesystem */

            if (!isset($adapters[$filesystem->getAdapter()])) {
                throw new RuntimeException(
                    sprintf('Adapter "%s" does not exist', $filesystem->getAdapter())
                );
            }

            /** @todo Check if adapter is a \Gaufrette\Adapter object */

            $filesystems[$name] = new Filesystem($adapters[$filesystem->getAdapter()]);
        }

        return new FilesystemService($filesystems);
    }
}
