<?php

/*
 * This file is part of [contao-appointment].
 *
 * (c) mindbird
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\SkeletonBundle\Tests;

use Contao\SkeletonBundle\ContaoSkeletonBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoSkeletonBundle();

        $this->assertInstanceOf('Contao\SkeletonBundle\ContaoSkeletonBundle', $bundle);
    }
}
