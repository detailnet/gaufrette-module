<?php

return array(
    'service_manager' => array(
        'abstract_factories' => array(
        ),
        'aliases' => array(
        ),
        'invokables' => array(
        ),
        'factories' => array(
            'Detail\Gaufrette\Options\ModuleOptions'     => 'Detail\Gaufrette\Factory\Options\ModuleOptionsFactory',
            'Detail\Gaufrette\Service\FilesystemService' => 'Detail\Gaufrette\Factory\Service\FilesystemServiceFactory',
        ),
        'initializers' => array(
            'Detail\Gaufrette\Service\FilesystemServiceInitializer',
        ),
        'shared' => array(
        ),
    ),
    'controllers' => array(
        'initializers' => array(
            'Detail\Gaufrette\Service\FilesystemServiceInitializer',
        ),
    ),
    'gaufrette' => array(
        // Type/class mapping for the adapter factories
        'adapter_factories' => array(
            'local'  => 'Detail\Gaufrette\Factory\Adapter\LocalAdapterFactory',
            'aws_s3' => 'Detail\Gaufrette\Factory\Adapter\AwsS3AdapterFactory',
        ),
        'adapters' => array(),
        'filesystems' => array(),
    ),
);
