<?php

namespace Ls\Omni\Controller\Adminhtml\Order;

use Exception;
use \Ls\Omni\Helper\BasketHelper;
use \Ls\Omni\Helper\OrderHelper;
use Magento\Backend\App\Action;
use Magento\Framework\Message\ManagerInterface;
use Magento\Sales\Api\OrderRepositoryInterface;
use Psr\Log\LoggerInterface;

/**
 * Class LoadStore
 * @package Ls\Omni\Controller\Adminhtml\Order
 */
class Request extends Action
{
    /**
     * @var OrderRepositoryInterface
     */
    public $orderRepository;

    /**
     * @var BasketHelper
     */
    public $basketHelper;


    /**
     * @var LoggerInterface
     */
    public $logger;

    /**
     * @var OrderHelper
     */
    public $orderHelper;

    /**
     * @var ManagerInterface
     */
    public $messageManager;

    /**
     * Request constructor.
     * @param Action\Context $context
     * @param OrderRepositoryInterface $orderRepository
     * @param BasketHelper $basketHelper
     * @param LoggerInterface $logger
     * @param OrderHelper $orderHelper
     */
    public function __construct(
        Action\Context $context,
        OrderRepositoryInterface $orderRepository,
        BasketHelper $basketHelper,
        LoggerInterface $logger,
        OrderHelper $orderHelper
    ) {
        $this->orderRepository = $orderRepository;
        $this->basketHelper    = $basketHelper;
        $this->logger          = $logger;
        $this->orderHelper     = $orderHelper;
        $this->messageManager  = $context->getMessageManager();
        parent::__construct($context);
    }

    public function execute()
    {
        $orderId        = $this->getRequest()->getParam('order_id');
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('sales/order/view', ['order_id' => $orderId]);
        try {
            $order              = $this->orderRepository->get($orderId);
            $oneListCalculation = $this->basketHelper->calculateOneListFromOrder($order);
            $request            = $this->orderHelper->prepareOrder($order, $oneListCalculation);
            $response           = $this->orderHelper->placeOrder($request);
            if (property_exists($response, 'OrderCreateResult')) {
                if (!empty($response->getResult()->getId())) {
                    $documentId = $response->getResult()->getId();
                    $order->setDocumentId($documentId);
                }
                $this->messageManager->addSuccessMessage(
                    __('Order request has been sent to LS Central successfully')
                );
            } else {
                if ($response) {
                    if (!empty($response->getMessage())) {
                        $this->logger->critical(
                            __('Something terrible happened while placing order')
                        );
                        $this->messageManager->addErrorMessage($response->getMessage());
                    }
                }
            }
            $this->orderRepository->save($order);
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
        }
        return $resultRedirect;
    }
}