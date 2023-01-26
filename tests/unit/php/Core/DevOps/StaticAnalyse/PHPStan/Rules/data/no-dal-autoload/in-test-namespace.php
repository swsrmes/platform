<?php declare(strict_types=1);

namespace Shopware\Core\Test\Entity;

use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;

class Definition
{
    public const ENTITY_NAME = 'my-entity';

    public function __construct()
    {
        new OneToOneAssociationField('prop', 'storageName', 'referenceField', 'referenceClass', true);
        new ManyToOneAssociationField('prop', 'storageName', 'referenceClass', 'referenceField', true);
    }
}
