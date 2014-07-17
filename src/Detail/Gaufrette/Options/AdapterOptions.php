<?php

namespace Detail\Gaufrette\Options;

use Detail\Core\Options\AbstractOptions;

class AdapterOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var array
     */
    protected $options = array();

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }
}
