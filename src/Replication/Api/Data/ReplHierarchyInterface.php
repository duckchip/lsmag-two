<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Replication\Api\Data;

interface ReplHierarchyInterface
{

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
     * @param string $nav_id
     * @return $this
     */
    public function setNavId($nav_id);


    /**
     * @return string
     */
    public function getNavId();


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
     * @param HierarchyType $Type
     * @return $this
     */
    public function setType($Type);


    /**
     * @return HierarchyType
     */
    public function getType();


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

