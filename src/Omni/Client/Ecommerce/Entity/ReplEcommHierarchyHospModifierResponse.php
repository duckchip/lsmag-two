<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class ReplEcommHierarchyHospModifierResponse implements ResponseInterface
{

    /**
     * @property ReplHierarchyHospModifierResponse
     * $ReplEcommHierarchyHospModifierResult
     */
    protected $ReplEcommHierarchyHospModifierResult = null;

    /**
     * @param ReplHierarchyHospModifierResponse $ReplEcommHierarchyHospModifierResult
     * @return $this
     */
    public function setReplEcommHierarchyHospModifierResult($ReplEcommHierarchyHospModifierResult)
    {
        $this->ReplEcommHierarchyHospModifierResult = $ReplEcommHierarchyHospModifierResult;
        return $this;
    }

    /**
     * @return ReplHierarchyHospModifierResponse
     */
    public function getReplEcommHierarchyHospModifierResult()
    {
        return $this->ReplEcommHierarchyHospModifierResult;
    }

    /**
     * @return ReplHierarchyHospModifierResponse
     */
    public function getResult()
    {
        return $this->ReplEcommHierarchyHospModifierResult;
    }


}
