<?php

namespace Elcodi\Component\Permissions\Tests\UnitTest\Entity;

use Elcodi\Component\Permissions\Entity\Permission;
use Elcodi\Component\Core\Tests\UnitTest\Entity\AbstractEntityTest;

use InvalidArgumentException;

class PermissionTest extends AbstractEntityTest
{
    /**
     * Return the entity namespace.
     *
     * @return string Entity namespace
     */
    public function getEntityNamespace()
    {
        return 'Elcodi\Component\Permissions\Entity\Permission';
    }

    public function getTestableFields()
    {
        return [
            [[
                'type' => $this::GETTER_SETTER,
                'getter' => 'getResource',
                'setter' => 'setResource',
                'value' => 'my-resource',
                'nullable' => false,
            ]],
            [[
                'type' => $this::GETTER_SETTER,
                'getter' => 'getCanRead',
                'setter' => 'setCanRead',
                'value' => true,
                'nullable' => false,
            ]],
            [[
                'type' => $this::GETTER_SETTER,
                'getter' => 'getCanCreate',
                'setter' => 'setCanCreate',
                'value' => true,
                'nullable' => false,
            ]],
            [[
                'type' => $this::GETTER_SETTER,
                'getter' => 'getCanUpdate',
                'setter' => 'setCanUpdate',
                'value' => true,
                'nullable' => false,
            ]],
            [[
                'type' => $this::GETTER_SETTER,
                'getter' => 'getCanDelete',
                'setter' => 'setCanDelete',
                'value' => true,
                'nullable' => false,
            ]]
        ];
    }

    public function testSetResourceShouldThrowInvalidArgumentExceptionIfResourceIsEmpty()
    {
        $permission = new Permission();
        $permission->setResource(null);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('resource');
    }

    public function testSetCanReadShouldThrowInvalidArgumentExceptionIfIsNotBool()
    {
        $permission = new Permission();
        $permission->setResource('my-resource');
        $permission->setCanRead('wrong');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('canRead');
    }

    public function testSetCanCreateShouldThrowInvalidArgumentExceptionIfIsNotBool()
    {
        $permission = new Permission();
        $permission->setResource('my-resource');
        $permission->setCanCreate('wrong');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('canCreate');
    }

    public function testSetCanUpdateShouldThrowInvalidArgumentExceptionIfIsNotBool()
    {
        $permission = new Permission();
        $permission->setResource('my-resource');
        $permission->setCanUpdate('wrong');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('canUpdate');
    }


    public function testSetCanDeleteShouldThrowInvalidArgumentExceptionIfIsNotBool()
    {
        $permission = new Permission();
        $permission->setResource('my-resource');
        $permission->setCanDelete('wrong');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('canDelete');
    }
}
