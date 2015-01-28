<?php

namespace Detail\Gaufrette\Service;

interface FilesystemServiceInterface
{
    /**
     * Check for existence of a filesystem by its name.
     *
     * @param string $name Name of a filesystem
     * @return bool
     */
    public function has($name);

    /**
     * Retrieve a filesystem by its name.
     *
     * @param string $name Name of a filesystem
     * @throws \InvalidArgumentException If the filesystem does not exist
     * @return \Gaufrette\Filesystem
     */
    public function get($name);

    /**
     * Retrieve all registered filesystems.
     *
     * @return array
     */
    public function getAll();
}
