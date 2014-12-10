<?php

/**
 * This file is part of CSBill package.
 *
 * (c) 2013-2014 Pierre du Plessis <info@customscripts.co.za>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace CSBill\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

/**
 * Class Tax
 *
 * @package CSBill\CoreBundle\Form\Type
 */
class Tax extends AbstractType
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'entity';
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'tax_field';
    }
}
