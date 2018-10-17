<?php
namespace Application\Sonata\MediaBundle\Provider;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Provider\ImageProvider;

class CustomImageProvider extends ImageProvider
{

    /**
     * {@inheritdoc}
     */
    public function getProviderMetadata()
    {
        return new Metadata('Image', $this->getName().'.description', false, 'SonataMediaBundle', ['class' => 'fa fa-picture-o']);
    }

    /**
     * {@inheritdoc}
     */
    public function buildEditForm(FormMapper $formMapper)
    {
        $formMapper->add('name');
        $formMapper->add('description');
    }

}
