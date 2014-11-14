<?php

namespace Detail\Gaufrette\Service;

trait FilesystemServiceAwareTrait
{
    /**
     * @var FilesystemServiceInterface
     */
    protected $filesystemService;

    /**
     * {@inheritdoc}
     */
    public function setFilesystemService(FilesystemServiceInterface $filesystemService)
    {
        $this->filesystemService = $filesystemService;
    }
}
