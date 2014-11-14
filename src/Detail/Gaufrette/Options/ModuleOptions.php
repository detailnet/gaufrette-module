<?php

namespace Detail\Gaufrette\Options;

use Detail\Core\Options\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var array
     */
    protected $adapterFactories = array();

    /**
     * @var array[AdapterOptions]
     */
    protected $adapters = array();

    /**
     * @var array
     */
    protected $filesystems = array();

    /**
     * @return array
     */
    public function getAdapterFactories()
    {
        return $this->adapterFactories;
    }

    /**
     * @param array $adapterFactories
     */
    public function setAdapterFactories($adapterFactories)
    {
        $this->adapterFactories = $adapterFactories;
    }

    /**
     * @return array[AdapterOptions]
     */
    public function getAdapters()
    {
        return $this->adapters;
    }

    /**
     * @param array $adapters
     */
    public function setAdapters(array $adapters)
    {
        $options = array();

        foreach ($adapters as $name => $config) {
            $options[$name] = new AdapterOptions($config);
        }

        $this->adapters = $options;
    }

    /**
     * @return array
     */
    public function getFilesystems()
    {
        return $this->filesystems;
    }

    /**
     * @param array $filesystems
     */
    public function setFilesystems(array $filesystems)
    {
        $options = array();

        foreach ($filesystems as $name => $config) {
            $options[$name] = new FilesystemOptions($config);
        }

        $this->filesystems = $options;
    }
}
