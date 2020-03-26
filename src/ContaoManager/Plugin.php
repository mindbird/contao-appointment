<?php

/*
 * This file is part of [contao-appointment].
 *
 * (c) mindbird
 *
 * @license LGPL-3.0-or-later
 */

namespace Mindbird\Contao\Appointment\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Mindbird\Contao\Appointment\AppointmentBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(AppointmentBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
