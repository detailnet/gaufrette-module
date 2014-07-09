<?php

namespace Detail\Gaufrette\Service;

interface FilesystemServiceAwareInterface
{
    /**
     * Set a filesystem service.
     *
     * @param FilesystemServiceInterface $filesystemService
     */
    public function setFilesystemService(FilesystemServiceInterface $filesystemService);
}
