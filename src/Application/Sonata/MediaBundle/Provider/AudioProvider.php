<?php
namespace Application\Sonata\MediaBundle\Provider;

use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Provider\FileProvider;

class AudioProvider extends FileProvider
{

    /**
     * {@inheritdoc}
     * In order to disable thumbnail creation
     */
    public function postPersist(MediaInterface $media)
    {
        if (null === $media->getBinaryContent()) {
            return;
        }

        $this->setFileContents($media);

        $media->resetBinaryContent();
    }

}