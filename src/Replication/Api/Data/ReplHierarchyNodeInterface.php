<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Replication\Api\Data;

interface ReplHierarchyNodeInterface
{

    /**
     * @param int $ChildrenOrder
     * @return $this
     */
    public function setChildrenOrder($ChildrenOrder);


    /**
     * @return int
     */
    public function getChildrenOrder();


    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description);


    /**
     * @return string
     */
    public function getDescription();


    /**
     * @param string $HierarchyCode
     * @return $this
     */
    public function setHierarchyCode($HierarchyCode);


    /**
     * @return string
     */
    public function getHierarchyCode();


    /**
     * @param string $nav_id
     * @return $this
     */
    public function setNavId($nav_id);


    /**
     * @return string
     */
    public function getNavId();


    /**
     * @param string $ImageId
     * @return $this
     */
    public function setImageId($ImageId);


    /**
     * @return string
     */
    public function getImageId();


    /**
     * @param int $Indentation
     * @return $this
     */
    public function setIndentation($Indentation);


    /**
     * @return int
     */
    public function getIndentation();


    /**
     * @param boolean $IsDeleted
     * @return $this
     */
    public function setIsDeleted($IsDeleted);


    /**
     * @return boolean
     */
    public function getIsDeleted();


    /**
     * @param string $ParentNode
     * @return $this
     */
    public function setParentNode($ParentNode);


    /**
     * @return string
     */
    public function getParentNode();


    /**
     * @param int $PresentationOrder
     * @return $this
     */
    public function setPresentationOrder($PresentationOrder);


    /**
     * @return int
     */
    public function getPresentationOrder();


    /**
     * @param string $scope
     * @return $this
     */
    public function setScope($scope);


    /**
     * @return string
     */
    public function getScope();


    /**
     * @param int $scope_id
     * @return $this
     */
    public function setScopeId($scope_id);


    /**
     * @return int
     */
    public function getScopeId();


    /**
     * @param string $processed
     * @return $this
     */
    public function setProcessed($processed);


    /**
     * @return string
     */
    public function getProcessed();



}

