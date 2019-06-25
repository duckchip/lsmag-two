<?php

namespace Ls\Replication\Controller\Adminhtml\Deletion;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ResourceConnection;
use Psr\Log\LoggerInterface;

/**
 * Magento uses Catalog Price Rule for discounts replication
 * Class Discount Deletion
 */
class Discount extends Action
{
    /** @var LoggerInterface */
    public $logger;

    /** @var ResourceConnection */
    public $resource;

    /** @var array List of all the Discount tables */
    public $discount_tables = [
        "catalogrule",
        "catalogrule_customer_group",
        "catalogrule_group_website",
        "catalogrule_group_website_replica",
        "catalogrule_product_price",
        "catalogrule_product_price_replica",
        "catalogrule_product",
        "catalogrule_product_replica",
        "catalogrule_website"
    ];

    // @codingStandardsIgnoreStart
    /** @var array  */
    protected $_publicActions = ['discount'];
    // @codingStandardsIgnoreEnd

    /**
     * Discount Deletion constructor.
     * @param ResourceConnection $resource
     * @param LoggerInterface $logger
     */
    public function __construct(
        ResourceConnection $resource,
        LoggerInterface $logger,
        Context $context
    ) {
        $this->resource = $resource;
        $this->logger = $logger;
        parent::__construct($context);
    }

    /**
     * Remove discounts
     *
     * @return void
     */
    public function execute()
    {
        // @codingStandardsIgnoreStart
        $connection = $this->resource->getConnection(ResourceConnection::DEFAULT_CONNECTION);
        $connection->query('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($this->discount_tables as $discountTable) {
            $tableName = $connection->getTableName($discountTable);
            try {
                $connection->truncateTable($tableName);
            } catch (\Exception $e) {
                $this->logger->debug($e->getMessage());
            }
        }
        $connection = $this->resource->getConnection(ResourceConnection::DEFAULT_CONNECTION);
        $lsTableName = $connection->getTableName('ls_replication_repl_discount');
        $lsQuery = "UPDATE " . $lsTableName . " SET processed = 0;";
        try {
            $connection->query($lsQuery);
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage());
        }
        $connection->query('SET FOREIGN_KEY_CHECKS = 1;');
        // @codingStandardsIgnoreEnd
        $this->messageManager->addSuccessMessage(__('Discounts deleted successfully.'));
        $this->_redirect('adminhtml/system_config/edit/section/ls_mag');
    }
}