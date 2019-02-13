<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class ReplHierarchyNode
{

    /**
     * @property int $ChildrenOrder
     */
    protected $ChildrenOrder = null;

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
     * @property int $Indentation
     */
    protected $Indentation = null;

    /**
     * @property boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @property string $ParentNode
     */
    protected $ParentNode = null;

    /**
     * @property int $PresentationOrder
     */
    protected $PresentationOrder = null;

    /**
     * @param int $ChildrenOrder
     * @return $this
     */
    public function setChildrenOrder($ChildrenOrder)
    {
        $this->ChildrenOrder = $ChildrenOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getChildrenOrder()
    {
        return $this->ChildrenOrder;
    }

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
     * @param int $Indentation
     * @return $this
     */
    public function setIndentation($Indentation)
    {
        $this->Indentation = $Indentation;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndentation()
    {
        return $this->Indentation;
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
     * @param string $ParentNode
     * @return $this
     */
    public function setParentNode($ParentNode)
    {
        $this->ParentNode = $ParentNode;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentNode()
    {
        return $this->ParentNode;
    }

    /**
     * @param int $PresentationOrder
     * @return $this
     */
    public function setPresentationOrder($PresentationOrder)
    {
        $this->PresentationOrder = $PresentationOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getPresentationOrder()
    {
        return $this->PresentationOrder;
    }


}

