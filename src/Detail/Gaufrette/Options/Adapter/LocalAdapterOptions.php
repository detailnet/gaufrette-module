<?php

namespace Detail\Gaufrette\Options\Adapter;

use Detail\Core\Options\AbstractOptions;

class LocalAdapterOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $directory = '';

    /**
     * @var bool
     */
    protected $create = true;

    /**
     * @var int
     */
    protected $mode = 0777;

    /**
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @param string $directory
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }

    /**
     * @return boolean
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * @param boolean $create
     */
    public function setCreate($create)
    {
        $this->create = $create;
    }

    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }
}
