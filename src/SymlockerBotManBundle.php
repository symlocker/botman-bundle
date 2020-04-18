<?php
/*
 * This file is part of the botman-bundle package.
 *
 * (c) Roman Yurchenko <yurchenkoromanvladimirovich@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Symlocker\BotManBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symlocker\BotManBundle\DependencyInjection\SymlockerBotManExtension;

class SymlockerBotManBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function getContainerExtension()
    {
        return new SymlockerBotManExtension();
    }
}