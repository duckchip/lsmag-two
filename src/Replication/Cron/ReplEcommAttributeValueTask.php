<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Replication\Cron;

use Psr\Log\LoggerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Config\Model\ResourceModel\Config;
use Ls\Core\Helper\Data as LsHelper;
use Ls\Omni\Client\Ecommerce\Entity\ReplRequest;
use Ls\Omni\Client\Ecommerce\Operation\ReplEcommAttributeValue;
use Ls\Replication\Model\ReplAttributeValueRepository;
use Ls\Replication\Model\ReplAttributeValueFactory;
use Ls\Replication\Model\ReplAttributeValue;

class ReplEcommAttributeValueTask extends AbstractReplicationTask
{

    const JOB_CODE = 'replication_repl_attribute_value';

    const CONFIG_PATH = 'ls_mag/replication/repl_attribute_value';

    const CONFIG_PATH_STATUS = 'ls_mag/replication/status_repl_attribute_value';

    /**
     * @property ReplAttributeValueRepository $repository
     */
    protected $repository = null;

    /**
     * @property ReplAttributeValueFactory $factory
     */
    protected $factory = null;

    /**
     * @param ReplAttributeValueRepository $repository
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return ReplAttributeValueRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param ReplAttributeValueFactory $factory
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @return ReplAttributeValueFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    public function __construct(ScopeConfigInterface $scope_config, Config $resource_config, LoggerInterface $logger, LsHelper $helper, ReplAttributeValueFactory $factory, ReplAttributeValueRepository $repository)
    {
        parent::__construct($scope_config, $resource_config, $logger, $helper);
        $this->repository = $repository;
        $this->factory = $factory;
    }

    public function makeRequest($last_key, $full_replication = false, $batchsize = 100, $storeId = '')
    {
        $request = new ReplEcommAttributeValue();
        $request->getOperationInput()
                 ->setReplRequest( ( new ReplRequest() )->setBatchSize($batchsize)
                                                        ->setFullReplication($full_replication)
                                                        ->setLastKey($last_key)
                                                        ->setStoreId($storeId));
        return $request;
    }

    public function getConfigPath()
    {
        return self::CONFIG_PATH;
    }

    public function getConfigPathStatus()
    {
        return self::CONFIG_PATH_STATUS;
    }

    public function getMainEntity()
    {
        return ReplAttributeValue::class;
    }


}
