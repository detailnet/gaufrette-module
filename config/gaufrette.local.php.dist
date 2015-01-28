<?php

return array(
    'gaufrette' => array(
        'adapters' => array(
            'local-adapter' => array(
                'type' => 'local',
                'options' => array(
                    // Whether to create the directory if it does not exist.
                    'create' => true,
                    // The directory of the filesystem. (required)
                    'directory' => 'data/files',
                ),
            ),
            's3-adapter' => array(
                'type' => 'aws_s3',
                'options' => array(
                    // The service id of the Aws\S3\S3Client to use. (required)
                    'client' => 'Aws\S3\S3Client',
                    // The name of the S3 bucket to use. (required)
                    'bucket' => 'your-bucket-name',
                    'options' => array(
                        // Whether to create the bucket if it doesn't exist.
                        'create' => false,
                        // A directory to operate in. This directory will be created in the root of
                        // the bucket and all files will be read and written there.
                        'directory' => 'files',
                        // Support for canned ACLs, see http://docs.aws.amazon.com/AmazonS3/latest/dev/acl-overview.html#canned-acl
                        'acl' => 'public-read',
                    ),
                ),
            ),
        ),
        'filesystems' => array(
            // Filesystems can have any key
            'local-filesystem' => array(
                'adapter' => 'local-adapter', // Must match the adapter key
            ),
            's3-filesystem' => array(
                'adapter' => 's3-adapter', // Must match the adapter key
            ),
        ),
    ),
);
