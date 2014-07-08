<?php

namespace Detail\Gaufrette\Options;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var array[AdapterOptions]
     */
    protected $adapters = array();

    /**
     * @var array
     */
    protected $filesystems = array();

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
        $this->filesystems = $filesystems;
    }
}
