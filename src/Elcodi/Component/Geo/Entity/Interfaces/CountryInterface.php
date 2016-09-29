<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2016 Elcodi Networks S.L.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Component\Geo\Entity\Interfaces;

use Elcodi\Component\Core\Entity\Interfaces\DateTimeInterface;
// use Elcodi\Component\Core\Entity\Interfaces\EnabledInterface;
use Elcodi\Component\Core\Entity\Interfaces\IdentifiableInterface;

/**
 * Interface CountryInterface.
 */
interface CountryInterface
    extends
    IdentifiableInterface,
    DateTimeInterface
    // EnabledInterface

{

    /**
     * Sets Name.
     *
     * @param string $name Name
     *
     * @return $this Self object
     */
    public function setName($name);

    /**
     * Get Name.
     *
     * @return string Name
     */
    public function getName();

}
