<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\HierarchyLeafType;
use Ls\Omni\Exception\InvalidEnumException;

class ReplHierarchyLeaf
{

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property string $HierarchyCode
     */
    protected $HierarchyCode = null;

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property string $ImageId
     */
    protected $ImageId = null;

    /**
     * @property boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @property string $NodeId
     */
    protected $NodeId = null;

    /**
     * @property HierarchyLeafType $Type
     */
    protected $Type = null;

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $HierarchyCode
     * @return $this
     */
    public function setHierarchyCode($HierarchyCode)
    {
        $this->HierarchyCode = $HierarchyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getHierarchyCode()
    {
        return $this->HierarchyCode;
    }

    /**
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $ImageId
     * @return $this
     */
    public function setImageId($ImageId)
    {
        $this->ImageId = $ImageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageId()
    {
        return $this->ImageId;
    }

    /**
     * @param boolean $IsDeleted
     * @return $this
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->IsDeleted = $IsDeleted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param string $NodeId
     * @return $this
     */
    public function setNodeId($NodeId)
    {
        $this->NodeId = $NodeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNodeId()
    {
        return $this->NodeId;
    }

    /**
     * @param HierarchyLeafType|string $Type
     * @return $this
     * @throws InvalidEnumException
     */
    public function setType($Type)
    {
        if ( ! $Type instanceof HierarchyLeafType ) {
            if ( HierarchyLeafType::isValid( $Type ) ) 
                $Type = new HierarchyLeafType( $Type );
            elseif ( HierarchyLeafType::isValidKey( $Type ) ) 
                $Type = new HierarchyLeafType( constant( "HierarchyLeafType::$Type" ) );
            elseif ( ! $Type instanceof HierarchyLeafType )
                throw new InvalidEnumException();
        }
        $this->Type = $Type->getValue();
        
        return $this;
    }

    /**
     * @return HierarchyLeafType
     */
    public function getType()
    {
        return $this->Type;
    }


}
