<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
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

namespace Elcodi\Component\Product\Entity\Interfaces;

/**
 * Interface DimensionableInterface
 */
interface DimensionableInterface
{
    /**
     * Get Depth
     *
     * @return integer Depth
     */
    public function getDepth();

    /**
     * Get Height
     *
     * @return integer Height
     */
    public function getHeight();

    /**
     * Get Weight
     *
     * @return integer Weight
     */
    public function getWeight();

    /**
     * Get Width
     *
     * @return integer Width
     */
    public function getWidth();
}
