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
        'adapters' => array(
            'upload' => array(
                'type' => 'local',
                'options' => array(
                    // Whether to create the directory if it does not exist.
                    'create' => true,
                    // The directory of the filesystem. (required)
                    'directory' => 'data/files/uploads',
                ),
            ),
//            's3' => array(
//                'type' => 'aws_s3',
//                'options' => array(
//                    // The service id of the Aws\S3\S3Client to use. (required)
//                    'service_id' => 'Aws\S3\S3Client',
//                    // The name of the S3 bucket to use. (required)
//                    'bucket_name' => 'test',
//                    // tbd
//                    'detect_content_type' => true,
//                    'options' => array(
//                        // Whether to create the bucket if it doesn't exist.
//                        'create' => false,
//                        // A directory to operate in. This directory will be created in the root of
//                        // the bucket and all files will be read and written there.
//                        'directory' => '',
//                        // tbd
//                        'acl' => 'private',
//                    ),
//                ),
//            ),
        ),
        'filesystems' => array(
            'upload' => array(
                'adapter' => 'upload',
//                'alias' => 'default_filesystem',
            ),
        ),
    ),
);
