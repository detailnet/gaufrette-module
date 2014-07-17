<?php

namespace Detail\Gaufrette\Options\Adapter;

use Detail\Core\Options\AbstractOptions;

class AwsS3AdapterOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $client = 'Aws\S3\S3Client';

    /**
     * @var string
     */
    protected $bucket;

    /**
     * @var bool
     */
    protected $detectContentType = true;

    /**
     * @var array
     */
    protected $options = array();

    /**
     * @param string $bucket
     */
    public function setBucket($bucket)
    {
        $this->bucket = $bucket;
    }

    /**
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * @param string $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param boolean $detectContentType
     */
    public function setDetectContentType($detectContentType)
    {
        $this->detectContentType = $detectContentType;
    }

    /**
     * @return boolean
     */
    public function getDetectContentType()
    {
        return $this->detectContentType;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
} 