<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class ProfilesGetAllResponse implements ResponseInterface
{

    /**
     * @property ArrayOfProfile $ProfilesGetAllResult
     */
    protected $ProfilesGetAllResult = null;

    /**
     * @param ArrayOfProfile $ProfilesGetAllResult
     * @return $this
     */
    public function setProfilesGetAllResult($ProfilesGetAllResult)
    {
        $this->ProfilesGetAllResult = $ProfilesGetAllResult;
        return $this;
    }

    /**
     * @return ArrayOfProfile
     */
    public function getProfilesGetAllResult()
    {
        return $this->ProfilesGetAllResult;
    }

    /**
     * @return ArrayOfProfile
     */
    public function getResult()
    {
        return $this->ProfilesGetAllResult;
    }


}

