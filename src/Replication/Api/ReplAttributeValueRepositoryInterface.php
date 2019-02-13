<?php

namespace Ls\Replication\Api;

use Ls\Replication\Api\Data\ReplAttributeValueInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface ReplAttributeValueRepositoryInterface
{

    public function getList(SearchCriteriaInterface $criteria);


    public function save(ReplAttributeValueInterface $page);


    public function delete(ReplAttributeValueInterface $page);


    public function getById($id);


    public function deleteById($id);



}

