<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\RequestInterface;

class ContactCreate implements RequestInterface
{

    /**
     * @property MemberContact $contact
     */
    protected $contact = null;

    /**
     * @param MemberContact $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return MemberContact
     */
    public function getContact()
    {
        return $this->contact;
    }


}

