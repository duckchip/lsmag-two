<?php

namespace Ls\Replication\Api;

use Ls\Replication\Api\Data\ReplAttributeInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */
interface ReplAttributeRepositoryInterface
{

    public function getList(SearchCriteriaInterface $criteria);

    public function save(ReplAttributeInterface $page);

    public function delete(ReplAttributeInterface $page);

    public function getById($id);

    public function deleteById($id);


}

