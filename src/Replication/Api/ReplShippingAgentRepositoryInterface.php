<?php

namespace Ls\Replication\Api;

use Ls\Replication\Api\Data\ReplShippingAgentInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface ReplShippingAgentRepositoryInterface
{

    public function getList(SearchCriteriaInterface $criteria);


    public function save(ReplShippingAgentInterface $page);


    public function delete(ReplShippingAgentInterface $page);


    public function getById($id);


    public function deleteById($id);



}
