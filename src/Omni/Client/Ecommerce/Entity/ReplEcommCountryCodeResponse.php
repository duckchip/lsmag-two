<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class ReplEcommCountryCodeResponse implements ResponseInterface
{

    /**
     * @property ReplCountryCodeResponse $ReplEcommCountryCodeResult
     */
    protected $ReplEcommCountryCodeResult = null;

    /**
     * @param ReplCountryCodeResponse $ReplEcommCountryCodeResult
     * @return $this
     */
    public function setReplEcommCountryCodeResult($ReplEcommCountryCodeResult)
    {
        $this->ReplEcommCountryCodeResult = $ReplEcommCountryCodeResult;
        return $this;
    }

    /**
     * @return ReplCountryCodeResponse
     */
    public function getReplEcommCountryCodeResult()
    {
        return $this->ReplEcommCountryCodeResult;
    }

    /**
     * @return ReplCountryCodeResponse
     */
    public function getResult()
    {
        return $this->ReplEcommCountryCodeResult;
    }


}

