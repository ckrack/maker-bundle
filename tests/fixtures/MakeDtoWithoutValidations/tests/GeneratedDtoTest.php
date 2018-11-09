<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Dto\TaskData;

/**
 * @requires PHP 7.1
 */
class GeneratedDtoTest extends KernelTestCase
{
    public function testGeneratedDto()
    {
        $this->assertClassHasAttribute('task', TaskData::class);
        $this->assertClassHasAttribute('dueDate', TaskData::class);
        $this->assertClassNotHasAttribute('id', TaskData::class);
    }
}
