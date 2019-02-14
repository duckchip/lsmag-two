<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\Loyalty\Entity\Enum\ItemNumberType;
use \Ls\Omni\Exception\InvalidEnumException;
use \Ls\Omni\Client\Loyalty\Entity\Enum\SourceType;

class Order
{

    /**
     * @property boolean $AnonymousOrder
     */
    protected $AnonymousOrder = null;

    /**
     * @property string $CardId
     */
    protected $CardId = null;

    /**
     * @property boolean $ClickAndCollectOrder
     */
    protected $ClickAndCollectOrder = null;

    /**
     * @property Address $ContactAddress
     */
    protected $ContactAddress = null;

    /**
     * @property string $ContactId
     */
    protected $ContactId = null;

    /**
     * @property string $ContactName
     */
    protected $ContactName = null;

    /**
     * @property string $DayPhoneNumber
     */
    protected $DayPhoneNumber = null;

    /**
     * @property string $Email
     */
    protected $Email = null;

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property ItemNumberType $ItemNumberType
     */
    protected $ItemNumberType = null;

    /**
     * @property string $MobileNumber
     */
    protected $MobileNumber = null;

    /**
     * @property ArrayOfOrderDiscountLineCreateRequest $OrderDiscountLineCreateRequests
     */
    protected $OrderDiscountLineCreateRequests = null;

    /**
     * @property ArrayOfOrderLineCreateRequest $OrderLineCreateRequests
     */
    protected $OrderLineCreateRequests = null;

    /**
     * @property ArrayOfOrderPaymentCreateRequest $OrderPaymentCreateRequests
     */
    protected $OrderPaymentCreateRequests = null;

    /**
     * @property string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @property Address $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @property string $ShipToEmail
     */
    protected $ShipToEmail = null;

    /**
     * @property string $ShipToName
     */
    protected $ShipToName = null;

    /**
     * @property string $ShipToPhoneNumber
     */
    protected $ShipToPhoneNumber = null;

    /**
     * @property string $ShippingAgentCode
     */
    protected $ShippingAgentCode = null;

    /**
     * @property string $ShippingAgentServiceCode
     */
    protected $ShippingAgentServiceCode = null;

    /**
     * @property SourceType $SourceType
     */
    protected $SourceType = null;

    /**
     * @property string $StoreId
     */
    protected $StoreId = null;

    /**
     * @param boolean $AnonymousOrder
     * @return $this
     */
    public function setAnonymousOrder($AnonymousOrder)
    {
        $this->AnonymousOrder = $AnonymousOrder;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAnonymousOrder()
    {
        return $this->AnonymousOrder;
    }

    /**
     * @param string $CardId
     * @return $this
     */
    public function setCardId($CardId)
    {
        $this->CardId = $CardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardId()
    {
        return $this->CardId;
    }

    /**
     * @param boolean $ClickAndCollectOrder
     * @return $this
     */
    public function setClickAndCollectOrder($ClickAndCollectOrder)
    {
        $this->ClickAndCollectOrder = $ClickAndCollectOrder;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClickAndCollectOrder()
    {
        return $this->ClickAndCollectOrder;
    }

    /**
     * @param Address $ContactAddress
     * @return $this
     */
    public function setContactAddress($ContactAddress)
    {
        $this->ContactAddress = $ContactAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getContactAddress()
    {
        return $this->ContactAddress;
    }

    /**
     * @param string $ContactId
     * @return $this
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

    /**
     * @param string $ContactName
     * @return $this
     */
    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * @param string $DayPhoneNumber
     * @return $this
     */
    public function setDayPhoneNumber($DayPhoneNumber)
    {
        $this->DayPhoneNumber = $DayPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDayPhoneNumber()
    {
        return $this->DayPhoneNumber;
    }

    /**
     * @param string $Email
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param ItemNumberType|string $ItemNumberType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setItemNumberType($ItemNumberType)
    {
        if ( ! $ItemNumberType instanceof ItemNumberType ) {
            if ( ItemNumberType::isValid( $ItemNumberType ) ) 
                $ItemNumberType = new ItemNumberType( $ItemNumberType );
            elseif ( ItemNumberType::isValidKey( $ItemNumberType ) ) 
                $ItemNumberType = new ItemNumberType( constant( "ItemNumberType::$ItemNumberType" ) );
            elseif ( ! $ItemNumberType instanceof ItemNumberType )
                throw new InvalidEnumException();
        }
        $this->ItemNumberType = $ItemNumberType->getValue();

        return $this;
    }

    /**
     * @return ItemNumberType
     */
    public function getItemNumberType()
    {
        return $this->ItemNumberType;
    }

    /**
     * @param string $MobileNumber
     * @return $this
     */
    public function setMobileNumber($MobileNumber)
    {
        $this->MobileNumber = $MobileNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->MobileNumber;
    }

    /**
     * @param ArrayOfOrderDiscountLineCreateRequest $OrderDiscountLineCreateRequests
     * @return $this
     */
    public function setOrderDiscountLineCreateRequests($OrderDiscountLineCreateRequests)
    {
        $this->OrderDiscountLineCreateRequests = $OrderDiscountLineCreateRequests;
        return $this;
    }

    /**
     * @return ArrayOfOrderDiscountLineCreateRequest
     */
    public function getOrderDiscountLineCreateRequests()
    {
        return $this->OrderDiscountLineCreateRequests;
    }

    /**
     * @param ArrayOfOrderLineCreateRequest $OrderLineCreateRequests
     * @return $this
     */
    public function setOrderLineCreateRequests($OrderLineCreateRequests)
    {
        $this->OrderLineCreateRequests = $OrderLineCreateRequests;
        return $this;
    }

    /**
     * @return ArrayOfOrderLineCreateRequest
     */
    public function getOrderLineCreateRequests()
    {
        return $this->OrderLineCreateRequests;
    }

    /**
     * @param ArrayOfOrderPaymentCreateRequest $OrderPaymentCreateRequests
     * @return $this
     */
    public function setOrderPaymentCreateRequests($OrderPaymentCreateRequests)
    {
        $this->OrderPaymentCreateRequests = $OrderPaymentCreateRequests;
        return $this;
    }

    /**
     * @return ArrayOfOrderPaymentCreateRequest
     */
    public function getOrderPaymentCreateRequests()
    {
        return $this->OrderPaymentCreateRequests;
    }

    /**
     * @param string $PhoneNumber
     * @return $this
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param Address $ShipToAddress
     * @return $this
     */
    public function setShipToAddress($ShipToAddress)
    {
        $this->ShipToAddress = $ShipToAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getShipToAddress()
    {
        return $this->ShipToAddress;
    }

    /**
     * @param string $ShipToEmail
     * @return $this
     */
    public function setShipToEmail($ShipToEmail)
    {
        $this->ShipToEmail = $ShipToEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->ShipToEmail;
    }

    /**
     * @param string $ShipToName
     * @return $this
     */
    public function setShipToName($ShipToName)
    {
        $this->ShipToName = $ShipToName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToName()
    {
        return $this->ShipToName;
    }

    /**
     * @param string $ShipToPhoneNumber
     * @return $this
     */
    public function setShipToPhoneNumber($ShipToPhoneNumber)
    {
        $this->ShipToPhoneNumber = $ShipToPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToPhoneNumber()
    {
        return $this->ShipToPhoneNumber;
    }

    /**
     * @param string $ShippingAgentCode
     * @return $this
     */
    public function setShippingAgentCode($ShippingAgentCode)
    {
        $this->ShippingAgentCode = $ShippingAgentCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingAgentCode()
    {
        return $this->ShippingAgentCode;
    }

    /**
     * @param string $ShippingAgentServiceCode
     * @return $this
     */
    public function setShippingAgentServiceCode($ShippingAgentServiceCode)
    {
        $this->ShippingAgentServiceCode = $ShippingAgentServiceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingAgentServiceCode()
    {
        return $this->ShippingAgentServiceCode;
    }

    /**
     * @param SourceType|string $SourceType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setSourceType($SourceType)
    {
        if ( ! $SourceType instanceof SourceType ) {
            if ( SourceType::isValid( $SourceType ) ) 
                $SourceType = new SourceType( $SourceType );
            elseif ( SourceType::isValidKey( $SourceType ) ) 
                $SourceType = new SourceType( constant( "SourceType::$SourceType" ) );
            elseif ( ! $SourceType instanceof SourceType )
                throw new InvalidEnumException();
        }
        $this->SourceType = $SourceType->getValue();

        return $this;
    }

    /**
     * @return SourceType
     */
    public function getSourceType()
    {
        return $this->SourceType;
    }

    /**
     * @param string $StoreId
     * @return $this
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }


}

