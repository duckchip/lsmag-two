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
use Ls\Omni\Client\Ecommerce\Operation\ReplEcommMember;
use Ls\Replication\Model\ReplCustomerRepository;
use Ls\Replication\Model\ReplCustomerFactory;
use Ls\Replication\Model\ReplCustomer;

class ReplEcommMemberTask extends AbstractReplicationTask
{

    const JOB_CODE = 'replication_repl_customer';

    const CONFIG_PATH = 'ls_mag/replication/repl_customer';

    const CONFIG_PATH_STATUS = 'ls_mag/replication/status_repl_customer';

    /**
     * @property ReplCustomerRepository $repository
     */
    protected $repository = null;

    /**
     * @property ReplCustomerFactory $factory
     */
    protected $factory = null;

    /**
     * @param ReplCustomerRepository $repository
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return ReplCustomerRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param ReplCustomerFactory $factory
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @return ReplCustomerFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    public function __construct(ScopeConfigInterface $scope_config, Config $resource_config, LoggerInterface $logger, LsHelper $helper, ReplCustomerFactory $factory, ReplCustomerRepository $repository)
    {
        parent::__construct($scope_config, $resource_config, $logger, $helper);
        $this->repository = $repository;
        $this->factory = $factory;
    }

    public function makeRequest($last_key, $full_replication = false, $batchsize = 100, $storeId = '')
    {
        $request = new ReplEcommMember();
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
        return ReplCustomer::class;
    }


}

