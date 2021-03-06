<?php

namespace Ls\Replication\Api;

use Ls\Replication\Api\Data\ReplHierarchyHospRecipeInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */
interface ReplHierarchyHospRecipeRepositoryInterface
{

    public function getList(SearchCriteriaInterface $criteria);

    public function save(ReplHierarchyHospRecipeInterface $page);

    public function delete(ReplHierarchyHospRecipeInterface $page);

    public function getById($id);

    public function deleteById($id);


}

