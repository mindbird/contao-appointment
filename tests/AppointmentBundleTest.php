<?php

/*
 * This file is part of [contao-appointment].
 *
 * (c) mindbird
 *
 * @license LGPL-3.0-or-later
 */

namespace Mindbird\Contao\Appointment\Tests;

use Mindbird\Contao\Appointment\AppointmentBundle;
use PHPUnit\Framework\TestCase;

class AppointmentBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new AppointmentBundle();

        $this->assertInstanceOf('Mindbird\Contao\Appointmen\AppointmentBundle', $bundle);
    }
}
