<?php
/**
 * This file is part of CSBill package.
 *
 * (c) 2013-2014 Pierre du Plessis <info@customscripts.co.za>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace CSBill\ClientBundle\Entity;

use CSBill\CoreBundle\Traits\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * CSBill\ClientBundle\Entity\PrimaryContactDetail
 *
 * @ORM\Entity()
 */
class PrimaryContactDetail extends ContactDetail
{
    /**
     * @var Contact $contact
     *
     * @ORM\ManyToOne(targetEntity="Contact", inversedBy="primaryDetails")
     * @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     */
    private $contact;

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get contact
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contact
     *
     * @param Contact $contact
     *
     * @return PrimaryContactDetail
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;

        return $this;
    }
}
