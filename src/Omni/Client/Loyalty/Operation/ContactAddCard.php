<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Operation;

use Ls\Omni\Client\RequestInterface;
use Ls\Omni\Client\ResponseInterface;
use Ls\Omni\Client\AbstractOperation;
use Ls\Omni\Service\Service as OmniService;
use Ls\Omni\Service\ServiceType;
use Ls\Omni\Service\Soap\Client as OmniClient;
use Ls\Omni\Client\Loyalty\ClassMap;
use Ls\Omni\Client\Loyalty\Entity\ContactAddCard as ContactAddCardRequest;
use Ls\Omni\Client\Loyalty\Entity\ContactAddCardResponse as ContactAddCardResponse;

class ContactAddCard extends AbstractOperation
{

    const OPERATION_NAME = 'CONTACT_ADD_CARD';

    const SERVICE_TYPE = 'loyalty';

    /**
     * @property OmniClient $client
     */
    public $client = null;

    /**
     * @property ContactAddCardRequest $request
     */
    private $request = null;

    /**
     * @property ContactAddCardResponse $response
     */
    private $response = null;

    /**
     * @property ContactAddCardRequest $request_xml
     */
    private $request_xml = null;

    /**
     * @property ContactAddCardResponse $response_xml
     */
    private $response_xml = null;

    /**
     * @property mixed $error
     */
    private $error = null;

    /**
     * @param ServiceType $service_type
     */
    public function __construct()
    {
        $service_type = new ServiceType( self::SERVICE_TYPE );
        parent::__construct( $service_type );
        $url = OmniService::getUrl( $service_type ); 
        $this->client = new OmniClient( $url, $service_type );
        $this->client->setClassmap( $this->getClassMap() );
    }

    /**
     * @param ContactAddCardRequest $request
     * @return ResponseInterface|ContactAddCardResponse
     */
    public function execute(RequestInterface $request = null)
    {
        if ( !is_null( $request ) ) {
            $this->setRequest( $request );
        }
        return $this->makeRequest( 'ContactAddCard' );
    }

    /**
     * @return ContactAddCardRequest
     */
    public function & getOperationInput()
    {
        if ( is_null( $this->request ) ) {
            $this->request = new ContactAddCardRequest();
        }
        return $this->request;
    }

    /**
     * @return array
     */
    public function getClassMap()
    {
        return ClassMap::getClassMap();
    }

    protected function isTokenized()
    {
        return FALSE;
    }

    /**
     * @param OmniClient $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return OmniClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param ContactAddCardRequest $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return ContactAddCardRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param ContactAddCardResponse $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return ContactAddCardResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ContactAddCardRequest $request_xml
     * @return $this
     */
    public function setRequestXml($request_xml)
    {
        $this->request_xml = $request_xml;
        return $this;
    }

    /**
     * @return ContactAddCardRequest
     */
    public function getRequestXml()
    {
        return $this->request_xml;
    }

    /**
     * @param ContactAddCardResponse $response_xml
     * @return $this
     */
    public function setResponseXml($response_xml)
    {
        $this->response_xml = $response_xml;
        return $this;
    }

    /**
     * @return ContactAddCardResponse
     */
    public function getResponseXml()
    {
        return $this->response_xml;
    }

    /**
     * @param mixed $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }


}

