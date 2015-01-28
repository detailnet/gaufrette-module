<?php

namespace Detail\Gaufrette\Factory\Adapter;

use Zend\ServiceManager\ServiceLocatorInterface;

use Gaufrette\Adapter\AwsS3 as Adapter;

use Detail\Gaufrette\Options\Adapter\AwsS3AdapterOptions as Options;

class AwsS3AdapterFactory implements
    AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function createAdapter(ServiceLocatorInterface $serviceLocator, array $config)
    {
        $options = new Options($config);

        /** @var \Aws\S3\S3Client $client */
        $client = $serviceLocator->get($options->getClient());

        $adapter = new Adapter(
            $client,
            $options->getBucket(),
            $options->getOptions(),
            $options->getDetectContentType()
        );

        return $adapter;
    }
}
