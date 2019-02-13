<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\Gender;
use Ls\Omni\Client\Ecommerce\Entity\Enum\MaritalStatus;
use Ls\Omni\Exception\InvalidEnumException;

class MemberContact extends Entity
{

    /**
     * @property ArrayOfAddress $Addresses
     */
    protected $Addresses = null;

    /**
     * @property ArrayOfNotification $Notifications
     */
    protected $Notifications = null;

    /**
     * @property ArrayOfProfile $Profiles
     */
    protected $Profiles = null;

    /**
     * @property ArrayOfPublishedOffer $PublishedOffers
     */
    protected $PublishedOffers = null;

    /**
     * @property ArrayOfLoyTransaction $Transactions
     */
    protected $Transactions = null;

    /**
     * @property Account $Account
     */
    protected $Account = null;

    /**
     * @property string $AlternateId
     */
    protected $AlternateId = null;

    /**
     * @property OneList $Basket
     */
    protected $Basket = null;

    /**
     * @property string $BirthDay
     */
    protected $BirthDay = null;

    /**
     * @property Card $Card
     */
    protected $Card = null;

    /**
     * @property string $Email
     */
    protected $Email = null;

    /**
     * @property OmniEnvironment $Environment
     */
    protected $Environment = null;

    /**
     * @property string $FirstName
     */
    protected $FirstName = null;

    /**
     * @property Gender $Gender
     */
    protected $Gender = null;

    /**
     * @property string $Initials
     */
    protected $Initials = null;

    /**
     * @property string $LastName
     */
    protected $LastName = null;

    /**
     * @property Device $LoggedOnToDevice
     */
    protected $LoggedOnToDevice = null;

    /**
     * @property MaritalStatus $MaritalStatus
     */
    protected $MaritalStatus = null;

    /**
     * @property string $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @property string $MobilePhone
     */
    protected $MobilePhone = null;

    /**
     * @property string $Name
     */
    protected $Name = null;

    /**
     * @property string $Password
     */
    protected $Password = null;

    /**
     * @property string $Phone
     */
    protected $Phone = null;

    /**
     * @property int $RV
     */
    protected $RV = null;

    /**
     * @property string $UserName
     */
    protected $UserName = null;

    /**
     * @property OneList $WishList
     */
    protected $WishList = null;

    /**
     * @param ArrayOfAddress $Addresses
     * @return $this
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
        return $this;
    }

    /**
     * @return ArrayOfAddress
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param ArrayOfNotification $Notifications
     * @return $this
     */
    public function setNotifications($Notifications)
    {
        $this->Notifications = $Notifications;
        return $this;
    }

    /**
     * @return ArrayOfNotification
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }

    /**
     * @param ArrayOfProfile $Profiles
     * @return $this
     */
    public function setProfiles($Profiles)
    {
        $this->Profiles = $Profiles;
        return $this;
    }

    /**
     * @return ArrayOfProfile
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }

    /**
     * @param ArrayOfPublishedOffer $PublishedOffers
     * @return $this
     */
    public function setPublishedOffers($PublishedOffers)
    {
        $this->PublishedOffers = $PublishedOffers;
        return $this;
    }

    /**
     * @return ArrayOfPublishedOffer
     */
    public function getPublishedOffers()
    {
        return $this->PublishedOffers;
    }

    /**
     * @param ArrayOfLoyTransaction $Transactions
     * @return $this
     */
    public function setTransactions($Transactions)
    {
        $this->Transactions = $Transactions;
        return $this;
    }

    /**
     * @return ArrayOfLoyTransaction
     */
    public function getTransactions()
    {
        return $this->Transactions;
    }

    /**
     * @param Account $Account
     * @return $this
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param string $AlternateId
     * @return $this
     */
    public function setAlternateId($AlternateId)
    {
        $this->AlternateId = $AlternateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlternateId()
    {
        return $this->AlternateId;
    }

    /**
     * @param OneList $Basket
     * @return $this
     */
    public function setBasket($Basket)
    {
        $this->Basket = $Basket;
        return $this;
    }

    /**
     * @return OneList
     */
    public function getBasket()
    {
        return $this->Basket;
    }

    /**
     * @param string $BirthDay
     * @return $this
     */
    public function setBirthDay($BirthDay)
    {
        $this->BirthDay = $BirthDay;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDay()
    {
        return $this->BirthDay;
    }

    /**
     * @param Card $Card
     * @return $this
     */
    public function setCard($Card)
    {
        $this->Card = $Card;
        return $this;
    }

    /**
     * @return Card
     */
    public function getCard()
    {
        return $this->Card;
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
     * @param OmniEnvironment $Environment
     * @return $this
     */
    public function setEnvironment($Environment)
    {
        $this->Environment = $Environment;
        return $this;
    }

    /**
     * @return OmniEnvironment
     */
    public function getEnvironment()
    {
        return $this->Environment;
    }

    /**
     * @param string $FirstName
     * @return $this
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param Gender|string $Gender
     * @return $this
     * @throws InvalidEnumException
     */
    public function setGender($Gender)
    {
        if ( ! $Gender instanceof Gender ) {
            if ( Gender::isValid( $Gender ) ) 
                $Gender = new Gender( $Gender );
            elseif ( Gender::isValidKey( $Gender ) ) 
                $Gender = new Gender( constant( "Gender::$Gender" ) );
            elseif ( ! $Gender instanceof Gender )
                throw new InvalidEnumException();
        }
        $this->Gender = $Gender->getValue();
        
        return $this;
    }

    /**
     * @return Gender
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param string $Initials
     * @return $this
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param string $LastName
     * @return $this
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param Device $LoggedOnToDevice
     * @return $this
     */
    public function setLoggedOnToDevice($LoggedOnToDevice)
    {
        $this->LoggedOnToDevice = $LoggedOnToDevice;
        return $this;
    }

    /**
     * @return Device
     */
    public function getLoggedOnToDevice()
    {
        return $this->LoggedOnToDevice;
    }

    /**
     * @param MaritalStatus|string $MaritalStatus
     * @return $this
     * @throws InvalidEnumException
     */
    public function setMaritalStatus($MaritalStatus)
    {
        if ( ! $MaritalStatus instanceof MaritalStatus ) {
            if ( MaritalStatus::isValid( $MaritalStatus ) ) 
                $MaritalStatus = new MaritalStatus( $MaritalStatus );
            elseif ( MaritalStatus::isValidKey( $MaritalStatus ) ) 
                $MaritalStatus = new MaritalStatus( constant( "MaritalStatus::$MaritalStatus" ) );
            elseif ( ! $MaritalStatus instanceof MaritalStatus )
                throw new InvalidEnumException();
        }
        $this->MaritalStatus = $MaritalStatus->getValue();
        
        return $this;
    }

    /**
     * @return MaritalStatus
     */
    public function getMaritalStatus()
    {
        return $this->MaritalStatus;
    }

    /**
     * @param string $MiddleName
     * @return $this
     */
    public function setMiddleName($MiddleName)
    {
        $this->MiddleName = $MiddleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param string $MobilePhone
     * @return $this
     */
    public function setMobilePhone($MobilePhone)
    {
        $this->MobilePhone = $MobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }

    /**
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Password
     * @return $this
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Phone
     * @return $this
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param int $RV
     * @return $this
     */
    public function setRV($RV)
    {
        $this->RV = $RV;
        return $this;
    }

    /**
     * @return int
     */
    public function getRV()
    {
        return $this->RV;
    }

    /**
     * @param string $UserName
     * @return $this
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param OneList $WishList
     * @return $this
     */
    public function setWishList($WishList)
    {
        $this->WishList = $WishList;
        return $this;
    }

    /**
     * @return OneList
     */
    public function getWishList()
    {
        return $this->WishList;
    }


}
