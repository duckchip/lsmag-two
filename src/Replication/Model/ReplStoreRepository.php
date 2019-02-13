<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Replication\Model;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Api\SearchCriteriaInterface;
use Exception;
use Magento\Framework\Phrase;
use Magento\Framework\Api\SortOrder;
use Ls\Replication\Model\ResourceModel\ReplStore\Collection;
use Ls\Replication\Model\ResourceModel\ReplStore\CollectionFactory;
use Ls\Replication\Api\ReplStoreRepositoryInterface;
use Ls\Replication\Api\Data\ReplStoreInterface;
use Ls\Replication\Model\ReplStoreFactory;
use Ls\Replication\Model\ReplStoreSearchResultsFactory;

class ReplStoreRepository implements ReplStoreRepositoryInterface
{

    /**
     * @property ReplStoreFactory $object_factory
     */
    protected $object_factory = null;

    /**
     * @property CollectionFactory $collection_factory
     */
    protected $collection_factory = null;

    /**
     * @property ReplStoreSearchResultsFactory $result_factory
     */
    protected $result_factory = null;

    public function __construct(ReplStoreFactory $object_factory, CollectionFactory $collection_factory, ReplStoreSearchResultsFactory $result_factory)
    {
        $this->object_factory = $object_factory;
        $this->collection_factory = $collection_factory;
        $this->result_factory = $result_factory;
    }

    public function getList(SearchCriteriaInterface $criteria)
    {
        /** @var SearchResultInterface $results */
        /** @noinspection PhpUndefinedMethodInspection */
        $results = $this->result_factory->create();
        $results->setSearchCriteria( $criteria );
        /** @var Collection $collection */
        /** @noinspection PhpUndefinedMethodInspection */
        $collection = $this->collection_factory->create();
        foreach ( $criteria->getFilterGroups() as $filter_group ) {
            $fields = [ ];
            $conditions = [ ];
            foreach ( $filter_group->getFilters() as $filter ) {
                $condition = $filter->getConditionType() ? $filter->getConditionType() : 'eq';
                $fields[] = $filter->getField();
                $conditions[] = [ $condition => $filter->getValue() ];
            }
            if ( $fields ) {
                $collection->addFieldToFilter( $fields, $conditions );
            }
        }
        $results->setTotalCount( $collection->getSize() );
        $sort_orders = $criteria->getSortOrders();
        if ( $sort_orders ) {
            /** @var SortOrder $sort_order */
            foreach ( $sort_orders as $sort_order ) {
                $collection->addOrder( $sort_order->getField(),
                                       ( $sort_order->getDirection() == SortOrder::SORT_ASC ) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage( $criteria->getCurrentPage() );
        $collection->setPageSize( $criteria->getPageSize() );
        $objects = [ ];
        foreach ( $collection as $object_model ) {
            $objects[] = $object_model;
        }
        $results->setItems( $objects );
        $results->setItems( $objects );
        
        return $results;
    }

    public function save(ReplStoreInterface $object)
    {
        try {
            $object->save();
        } catch ( Exception $e ) {
            throw new CouldNotSaveException( new Phrase( $e->getMessage() ) );
        }
        
        return $object;
    }

    public function getById($id)
    {
        $object = $this->object_factory->create();
        $object->load( $id );
        if ( ! $object->getId() ) {
            throw new NoSuchEntityException( new Phrase( "Object with id '$id' does not exist." ) );
        }
        
        return $object;
    }

    public function delete(ReplStoreInterface $object)
    {
        try {
            $object->delete();
        } catch ( Exception $e) {
            throw new CouldNotDeleteException( new Phrase( $e->getMessage() ) );
        }
        
        return TRUE;
    }

    public function deleteById($id)
    {
        return $this->delete( $this->getById( $id ) );
    }


}

