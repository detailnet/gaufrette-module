<?php

namespace Detail\Gaufrette\Options;

class FilesystemOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $adapter;

    /**
     * @return string
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * @param string $adapter
     */
    public function setAdapter($adapter)
    {
        $this->adapter = $adapter;
    }
}
