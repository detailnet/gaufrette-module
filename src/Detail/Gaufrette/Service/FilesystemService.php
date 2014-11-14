<?php

namespace Detail\Gaufrette\Service;

use InvalidArgumentException;

/**
 * Filesystem service.
 *
 * Holds references to all declared filesystems
 * and allows to access them through their name.
 */
class FilesystemService implements FilesystemServiceInterface
{
    /**
     * Map of filesystems indexed by their name.
     *
     * @var array
     */
    protected $filesystems;

    /**
     * Instantiate a new filesystem service.
     *
     * @param array $filesystems
     */
    public function __construct(array $filesystems)
    {
        /** @todo Assert each filesystem; needs to be a Gaufrette\Filesystem object */
        $this->filesystems = $filesystems;
    }

    /**
     * {@inheritdoc}
     */
    public function has($name)
    {
        return isset($this->filesystems[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function get($name)
    {
        if (!$this->has($name)) {
            throw new InvalidArgumentException(sprintf('No filesystem registered for name "%s"', $name));
        }

        return $this->filesystems[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function getAll()
    {
        return $this->filesystems;
    }
} 
