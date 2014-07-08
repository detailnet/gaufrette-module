<?php

namespace Detail\Gaufrette\Service;

use InvalidArgumentException;
use ArrayIterator;

/**
 * Filesystem service.
 *
 * Holds references to all declared filesystems
 * and allows to access them through their name.
 */
class FilesystemService
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

    public function has($name)
    {
        return isset($this->filesystems[$name]);
    }

    /**
     * Retrieve a filesystem by its name.
     *
     * @param string $name name of a filesystem
     * @throws InvalidArgumentException If the filesystem does not exist
     * @return \Gaufrette\Filesystem
     */
    public function get($name)
    {
        if (!isset($this->filesystems[$name])) {
            throw new InvalidArgumentException(sprintf('No filesystem registered for name "%s"', $name));
        }

        return $this->filesystems[$name];
    }

    /**
     * Retrieve all registered filesystems.
     *
     * @return array
     */
    public function getAll()
    {
        return $this->filesystems;
    }

    /**
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->getAll());
    }
} 