<?php
namespace Application\Sonata\MediaBundle\Admin;

use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\MediaBundle\Admin\BaseMediaAdmin;

class MediaAdmin extends BaseMediaAdmin
{
    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('context', null, [
                'show_filter' => false,
            ])
        ;
    }
}