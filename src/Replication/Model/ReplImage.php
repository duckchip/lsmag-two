<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Ls\Replication\Api\Data\ReplImageInterface;

class ReplImage extends AbstractModel implements ReplImageInterface, IdentityInterface
{

    const CACHE_TAG = 'ls_replication_repl_image';

    protected $_cacheTag = 'ls_replication_repl_image';

    protected $_eventPrefix = 'ls_replication_repl_image';

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property string $nav_id
     */
    protected $nav_id = null;

    /**
     * @property string $Image64
     */
    protected $Image64 = null;

    /**
     * @property boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @property string $Location
     */
    protected $Location = null;

    /**
     * @property LocationType $LocationType
     */
    protected $LocationType = null;

    /**
     * @property string $scope
     */
    protected $scope = null;

    /**
     * @property int $scope_id
     */
    protected $scope_id = null;

    /**
     * @property string $processed
     */
    protected $processed = null;

    /**
     * @property string $is_updated
     */
    protected $is_updated = null;

    public function _construct()
    {
        $this->_init( 'Ls\Replication\Model\ResourceModel\ReplImage' );
    }

    public function getIdentities()
    {
        return [ self::CACHE_TAG . '_' . $this->getId() ];
    }

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->setData( 'Description', $Description );
        $this->Description = $Description;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getData( 'Description' );
    }

    /**
     * @param string $nav_id
     * @return $this
     */
    public function setNavId($nav_id)
    {
        $this->setData( 'nav_id', $nav_id );
        $this->nav_id = $nav_id;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getNavId()
    {
        return $this->getData( 'nav_id' );
    }

    /**
     * @param string $Image64
     * @return $this
     */
    public function setImage64($Image64)
    {
        $this->setData( 'Image64', $Image64 );
        $this->Image64 = $Image64;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getImage64()
    {
        return $this->getData( 'Image64' );
    }

    /**
     * @param boolean $IsDeleted
     * @return $this
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->setData( 'IsDeleted', $IsDeleted );
        $this->IsDeleted = $IsDeleted;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->getData( 'IsDeleted' );
    }

    /**
     * @param string $Location
     * @return $this
     */
    public function setLocation($Location)
    {
        $this->setData( 'Location', $Location );
        $this->Location = $Location;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->getData( 'Location' );
    }

    /**
     * @param LocationType $LocationType
     * @return $this
     */
    public function setLocationType($LocationType)
    {
        $this->setData( 'LocationType', $LocationType );
        $this->LocationType = $LocationType;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return LocationType
     */
    public function getLocationType()
    {
        return $this->getData( 'LocationType' );
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->setData( 'scope', $scope );
        $this->scope = $scope;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->getData( 'scope' );
    }

    /**
     * @param int $scope_id
     * @return $this
     */
    public function setScopeId($scope_id)
    {
        $this->setData( 'scope_id', $scope_id );
        $this->scope_id = $scope_id;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return int
     */
    public function getScopeId()
    {
        return $this->getData( 'scope_id' );
    }

    /**
     * @param string $processed
     * @return $this
     */
    public function setProcessed($processed)
    {
        $this->setData( 'processed', $processed );
        $this->processed = $processed;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessed()
    {
        return $this->getData( 'processed' );
    }

    /**
     * @param string $is_updated
     * @return $this
     */
    public function setIsUpdated($is_updated)
    {
        $this->setData( 'is_updated', $is_updated );
        $this->is_updated = $is_updated;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getIsUpdated()
    {
        return $this->getData( 'is_updated' );
    }


}

