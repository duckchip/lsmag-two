<?php

namespace Ls\Omni\Controller\Ajax;

use \Ls\Omni\Helper\GiftCardHelper;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Pricing\Helper\Data;

/**
 * Class CheckGiftCardBalance
 * @package Ls\Omni\Controller\Ajax
 */
class CheckGiftCardBalance extends Action
{

    /** @var JsonFactory */
    public $resultJsonFactory;

    /**
     * @var RawFactory
     */
    public $resultRawFactory;

    /** @var GiftCardHelper */
    private $giftCardHelper;

    /**
     * @var Data
     */
    public $priceHelper;

    /**
     * CheckGiftCardBalance constructor.
     * @param Context $context
     * @param JsonFactory $resultJsonFactory
     * @param RawFactory $resultRawFactory
     * @param GiftCardHelper $giftCardHelper
     * @param Data $priceHelper
     */
    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        RawFactory $resultRawFactory,
        GiftCardHelper $giftCardHelper,
        Data $priceHelper
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->resultRawFactory  = $resultRawFactory;
        $this->giftCardHelper    = $giftCardHelper;
        $this->priceHelper       = $priceHelper;
    }

    /**
     * @return ResponseInterface|Json|Raw|ResultInterface
     */
    public function execute()
    {
        $httpBadRequestCode = 400;
        /** @var Raw $resultRaw */
        $resultRaw = $this->resultRawFactory->create();
        if ($this->getRequest()->getMethod() !== 'POST' || !$this->getRequest()->isXmlHttpRequest()) {
            return $resultRaw->setHttpResponseCode($httpBadRequestCode);
        }
        /** @var Json $resultJson */
        $resultJson   = $this->resultJsonFactory->create();
        $post         = $this->getRequest()->getContent();
        $postData     = json_decode($post);
        $giftCardCode = $postData->gift_card_code;
        $data         = [];
        if ($giftCardCode != null) {
            $giftCardResponse = $this->giftCardHelper->getGiftCardBalance($giftCardCode);
            if (is_object($giftCardResponse)) {
                $data['giftcardbalance'] = $this->priceHelper->currency($giftCardResponse->getBalance(), true, false);
                $data['expirydate']      = $giftCardResponse->getExpireDate();
            } else {
                $data['giftcardbalance'] = $this->priceHelper->currency($giftCardResponse, true, false);
                $data['expirydate']      = null;
            }
            if (empty($giftCardResponse)) {
                $response = [
                    'error'   => 'true',
                    'message' => __(
                        'The gift card code %1 is not valid.',
                        $giftCardCode
                    )
                ];
            } else {
                $response = [
                    'success' => 'true',
                    'data'    => json_encode($data)
                ];
            }
            return $resultJson->setData($response);
        } else {
            $response = [
                'error'   => 'true',
                'message' => __(
                    'The gift card code %1 is not valid.',
                    $giftCardCode
                )
            ];
            return $resultJson->setData($response);
        }

        return $resultJson->setData($response);
    }
}
