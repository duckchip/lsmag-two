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
use Ls\Omni\Client\Ecommerce\Operation\ReplEcommBasePrices;
use Ls\Replication\Model\ReplPriceRepository;
use Ls\Replication\Model\ReplPriceFactory;
use Ls\Replication\Model\ReplPrice;

class ReplEcommBasePricesTask extends AbstractReplicationTask
{

    const JOB_CODE = 'replication_repl_price';

    const CONFIG_PATH = 'ls_mag/replication/repl_price';

    const CONFIG_PATH_STATUS = 'ls_mag/replication/status_repl_price';

    /**
     * @property ReplPriceRepository $repository
     */
    protected $repository = null;

    /**
     * @property ReplPriceFactory $factory
     */
    protected $factory = null;

    /**
     * @param ReplPriceRepository $repository
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return ReplPriceRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param ReplPriceFactory $factory
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @return ReplPriceFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    public function __construct(ScopeConfigInterface $scope_config, Config $resource_config, LoggerInterface $logger, LsHelper $helper, ReplPriceFactory $factory, ReplPriceRepository $repository)
    {
        parent::__construct($scope_config, $resource_config, $logger, $helper);
        $this->repository = $repository;
        $this->factory = $factory;
    }

    public function makeRequest($last_key, $full_replication = false, $batchsize = 100, $storeId = '')
    {
        $request = new ReplEcommBasePrices();
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
        return ReplPrice::class;
    }


}

