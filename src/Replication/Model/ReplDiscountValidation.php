<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Replication\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Ls\Replication\Api\Data\ReplDiscountValidationInterface;

class ReplDiscountValidation extends AbstractModel implements ReplDiscountValidationInterface, IdentityInterface
{

    const CACHE_TAG = 'ls_replication_repl_discount_validation';

    protected $_cacheTag = 'ls_replication_repl_discount_validation';

    protected $_eventPrefix = 'ls_replication_repl_discount_validation';

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property boolean $EndAfterMidnight
     */
    protected $EndAfterMidnight = null;

    /**
     * @property string $EndDate
     */
    protected $EndDate = null;

    /**
     * @property string $EndTime
     */
    protected $EndTime = null;

    /**
     * @property string $FridayEnd
     */
    protected $FridayEnd = null;

    /**
     * @property boolean $FridayEndAfterMidnight
     */
    protected $FridayEndAfterMidnight = null;

    /**
     * @property string $FridayStart
     */
    protected $FridayStart = null;

    /**
     * @property boolean $FridayWithinBounds
     */
    protected $FridayWithinBounds = null;

    /**
     * @property string $nav_id
     */
    protected $nav_id = null;

    /**
     * @property boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @property string $MondayEnd
     */
    protected $MondayEnd = null;

    /**
     * @property boolean $MondayEndAfterMidnight
     */
    protected $MondayEndAfterMidnight = null;

    /**
     * @property string $MondayStart
     */
    protected $MondayStart = null;

    /**
     * @property boolean $MondayWithinBounds
     */
    protected $MondayWithinBounds = null;

    /**
     * @property string $SaturdayEnd
     */
    protected $SaturdayEnd = null;

    /**
     * @property boolean $SaturdayEndAfterMidnight
     */
    protected $SaturdayEndAfterMidnight = null;

    /**
     * @property string $SaturdayStart
     */
    protected $SaturdayStart = null;

    /**
     * @property boolean $SaturdayWithinBounds
     */
    protected $SaturdayWithinBounds = null;

    /**
     * @property string $StartDate
     */
    protected $StartDate = null;

    /**
     * @property string $StartTime
     */
    protected $StartTime = null;

    /**
     * @property string $SundayEnd
     */
    protected $SundayEnd = null;

    /**
     * @property boolean $SundayEndAfterMidnight
     */
    protected $SundayEndAfterMidnight = null;

    /**
     * @property string $SundayStart
     */
    protected $SundayStart = null;

    /**
     * @property boolean $SundayWithinBounds
     */
    protected $SundayWithinBounds = null;

    /**
     * @property string $ThursdayEnd
     */
    protected $ThursdayEnd = null;

    /**
     * @property boolean $ThursdayEndAfterMidnight
     */
    protected $ThursdayEndAfterMidnight = null;

    /**
     * @property string $ThursdayStart
     */
    protected $ThursdayStart = null;

    /**
     * @property boolean $ThursdayWithinBounds
     */
    protected $ThursdayWithinBounds = null;

    /**
     * @property boolean $TimeWithinBounds
     */
    protected $TimeWithinBounds = null;

    /**
     * @property string $TuesdayEnd
     */
    protected $TuesdayEnd = null;

    /**
     * @property boolean $TuesdayEndAfterMidnight
     */
    protected $TuesdayEndAfterMidnight = null;

    /**
     * @property string $TuesdayStart
     */
    protected $TuesdayStart = null;

    /**
     * @property boolean $TuesdayWithinBounds
     */
    protected $TuesdayWithinBounds = null;

    /**
     * @property string $WednesdayEnd
     */
    protected $WednesdayEnd = null;

    /**
     * @property boolean $WednesdayEndAfterMidnight
     */
    protected $WednesdayEndAfterMidnight = null;

    /**
     * @property string $WednesdayStart
     */
    protected $WednesdayStart = null;

    /**
     * @property boolean $WednesdayWithinBounds
     */
    protected $WednesdayWithinBounds = null;

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

    public function _construct()
    {
        $this->_init( 'Ls\Replication\Model\ResourceModel\ReplDiscountValidation' );
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
     * @param boolean $EndAfterMidnight
     * @return $this
     */
    public function setEndAfterMidnight($EndAfterMidnight)
    {
        $this->setData( 'EndAfterMidnight', $EndAfterMidnight );
        $this->EndAfterMidnight = $EndAfterMidnight;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEndAfterMidnight()
    {
        return $this->getData( 'EndAfterMidnight' );
    }

    /**
     * @param string $EndDate
     * @return $this
     */
    public function setEndDate($EndDate)
    {
        $this->setData( 'EndDate', $EndDate );
        $this->EndDate = $EndDate;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->getData( 'EndDate' );
    }

    /**
     * @param string $EndTime
     * @return $this
     */
    public function setEndTime($EndTime)
    {
        $this->setData( 'EndTime', $EndTime );
        $this->EndTime = $EndTime;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getData( 'EndTime' );
    }

    /**
     * @param string $FridayEnd
     * @return $this
     */
    public function setFridayEnd($FridayEnd)
    {
        $this->setData( 'FridayEnd', $FridayEnd );
        $this->FridayEnd = $FridayEnd;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getFridayEnd()
    {
        return $this->getData( 'FridayEnd' );
    }

    /**
     * @param boolean $FridayEndAfterMidnight
     * @return $this
     */
    public function setFridayEndAfterMidnight($FridayEndAfterMidnight)
    {
        $this->setData( 'FridayEndAfterMidnight', $FridayEndAfterMidnight );
        $this->FridayEndAfterMidnight = $FridayEndAfterMidnight;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getFridayEndAfterMidnight()
    {
        return $this->getData( 'FridayEndAfterMidnight' );
    }

    /**
     * @param string $FridayStart
     * @return $this
     */
    public function setFridayStart($FridayStart)
    {
        $this->setData( 'FridayStart', $FridayStart );
        $this->FridayStart = $FridayStart;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getFridayStart()
    {
        return $this->getData( 'FridayStart' );
    }

    /**
     * @param boolean $FridayWithinBounds
     * @return $this
     */
    public function setFridayWithinBounds($FridayWithinBounds)
    {
        $this->setData( 'FridayWithinBounds', $FridayWithinBounds );
        $this->FridayWithinBounds = $FridayWithinBounds;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getFridayWithinBounds()
    {
        return $this->getData( 'FridayWithinBounds' );
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
     * @param string $MondayEnd
     * @return $this
     */
    public function setMondayEnd($MondayEnd)
    {
        $this->setData( 'MondayEnd', $MondayEnd );
        $this->MondayEnd = $MondayEnd;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getMondayEnd()
    {
        return $this->getData( 'MondayEnd' );
    }

    /**
     * @param boolean $MondayEndAfterMidnight
     * @return $this
     */
    public function setMondayEndAfterMidnight($MondayEndAfterMidnight)
    {
        $this->setData( 'MondayEndAfterMidnight', $MondayEndAfterMidnight );
        $this->MondayEndAfterMidnight = $MondayEndAfterMidnight;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMondayEndAfterMidnight()
    {
        return $this->getData( 'MondayEndAfterMidnight' );
    }

    /**
     * @param string $MondayStart
     * @return $this
     */
    public function setMondayStart($MondayStart)
    {
        $this->setData( 'MondayStart', $MondayStart );
        $this->MondayStart = $MondayStart;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getMondayStart()
    {
        return $this->getData( 'MondayStart' );
    }

    /**
     * @param boolean $MondayWithinBounds
     * @return $this
     */
    public function setMondayWithinBounds($MondayWithinBounds)
    {
        $this->setData( 'MondayWithinBounds', $MondayWithinBounds );
        $this->MondayWithinBounds = $MondayWithinBounds;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMondayWithinBounds()
    {
        return $this->getData( 'MondayWithinBounds' );
    }

    /**
     * @param string $SaturdayEnd
     * @return $this
     */
    public function setSaturdayEnd($SaturdayEnd)
    {
        $this->setData( 'SaturdayEnd', $SaturdayEnd );
        $this->SaturdayEnd = $SaturdayEnd;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getSaturdayEnd()
    {
        return $this->getData( 'SaturdayEnd' );
    }

    /**
     * @param boolean $SaturdayEndAfterMidnight
     * @return $this
     */
    public function setSaturdayEndAfterMidnight($SaturdayEndAfterMidnight)
    {
        $this->setData( 'SaturdayEndAfterMidnight', $SaturdayEndAfterMidnight );
        $this->SaturdayEndAfterMidnight = $SaturdayEndAfterMidnight;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturdayEndAfterMidnight()
    {
        return $this->getData( 'SaturdayEndAfterMidnight' );
    }

    /**
     * @param string $SaturdayStart
     * @return $this
     */
    public function setSaturdayStart($SaturdayStart)
    {
        $this->setData( 'SaturdayStart', $SaturdayStart );
        $this->SaturdayStart = $SaturdayStart;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getSaturdayStart()
    {
        return $this->getData( 'SaturdayStart' );
    }

    /**
     * @param boolean $SaturdayWithinBounds
     * @return $this
     */
    public function setSaturdayWithinBounds($SaturdayWithinBounds)
    {
        $this->setData( 'SaturdayWithinBounds', $SaturdayWithinBounds );
        $this->SaturdayWithinBounds = $SaturdayWithinBounds;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturdayWithinBounds()
    {
        return $this->getData( 'SaturdayWithinBounds' );
    }

    /**
     * @param string $StartDate
     * @return $this
     */
    public function setStartDate($StartDate)
    {
        $this->setData( 'StartDate', $StartDate );
        $this->StartDate = $StartDate;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->getData( 'StartDate' );
    }

    /**
     * @param string $StartTime
     * @return $this
     */
    public function setStartTime($StartTime)
    {
        $this->setData( 'StartTime', $StartTime );
        $this->StartTime = $StartTime;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getData( 'StartTime' );
    }

    /**
     * @param string $SundayEnd
     * @return $this
     */
    public function setSundayEnd($SundayEnd)
    {
        $this->setData( 'SundayEnd', $SundayEnd );
        $this->SundayEnd = $SundayEnd;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getSundayEnd()
    {
        return $this->getData( 'SundayEnd' );
    }

    /**
     * @param boolean $SundayEndAfterMidnight
     * @return $this
     */
    public function setSundayEndAfterMidnight($SundayEndAfterMidnight)
    {
        $this->setData( 'SundayEndAfterMidnight', $SundayEndAfterMidnight );
        $this->SundayEndAfterMidnight = $SundayEndAfterMidnight;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSundayEndAfterMidnight()
    {
        return $this->getData( 'SundayEndAfterMidnight' );
    }

    /**
     * @param string $SundayStart
     * @return $this
     */
    public function setSundayStart($SundayStart)
    {
        $this->setData( 'SundayStart', $SundayStart );
        $this->SundayStart = $SundayStart;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getSundayStart()
    {
        return $this->getData( 'SundayStart' );
    }

    /**
     * @param boolean $SundayWithinBounds
     * @return $this
     */
    public function setSundayWithinBounds($SundayWithinBounds)
    {
        $this->setData( 'SundayWithinBounds', $SundayWithinBounds );
        $this->SundayWithinBounds = $SundayWithinBounds;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSundayWithinBounds()
    {
        return $this->getData( 'SundayWithinBounds' );
    }

    /**
     * @param string $ThursdayEnd
     * @return $this
     */
    public function setThursdayEnd($ThursdayEnd)
    {
        $this->setData( 'ThursdayEnd', $ThursdayEnd );
        $this->ThursdayEnd = $ThursdayEnd;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getThursdayEnd()
    {
        return $this->getData( 'ThursdayEnd' );
    }

    /**
     * @param boolean $ThursdayEndAfterMidnight
     * @return $this
     */
    public function setThursdayEndAfterMidnight($ThursdayEndAfterMidnight)
    {
        $this->setData( 'ThursdayEndAfterMidnight', $ThursdayEndAfterMidnight );
        $this->ThursdayEndAfterMidnight = $ThursdayEndAfterMidnight;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getThursdayEndAfterMidnight()
    {
        return $this->getData( 'ThursdayEndAfterMidnight' );
    }

    /**
     * @param string $ThursdayStart
     * @return $this
     */
    public function setThursdayStart($ThursdayStart)
    {
        $this->setData( 'ThursdayStart', $ThursdayStart );
        $this->ThursdayStart = $ThursdayStart;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getThursdayStart()
    {
        return $this->getData( 'ThursdayStart' );
    }

    /**
     * @param boolean $ThursdayWithinBounds
     * @return $this
     */
    public function setThursdayWithinBounds($ThursdayWithinBounds)
    {
        $this->setData( 'ThursdayWithinBounds', $ThursdayWithinBounds );
        $this->ThursdayWithinBounds = $ThursdayWithinBounds;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getThursdayWithinBounds()
    {
        return $this->getData( 'ThursdayWithinBounds' );
    }

    /**
     * @param boolean $TimeWithinBounds
     * @return $this
     */
    public function setTimeWithinBounds($TimeWithinBounds)
    {
        $this->setData( 'TimeWithinBounds', $TimeWithinBounds );
        $this->TimeWithinBounds = $TimeWithinBounds;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTimeWithinBounds()
    {
        return $this->getData( 'TimeWithinBounds' );
    }

    /**
     * @param string $TuesdayEnd
     * @return $this
     */
    public function setTuesdayEnd($TuesdayEnd)
    {
        $this->setData( 'TuesdayEnd', $TuesdayEnd );
        $this->TuesdayEnd = $TuesdayEnd;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getTuesdayEnd()
    {
        return $this->getData( 'TuesdayEnd' );
    }

    /**
     * @param boolean $TuesdayEndAfterMidnight
     * @return $this
     */
    public function setTuesdayEndAfterMidnight($TuesdayEndAfterMidnight)
    {
        $this->setData( 'TuesdayEndAfterMidnight', $TuesdayEndAfterMidnight );
        $this->TuesdayEndAfterMidnight = $TuesdayEndAfterMidnight;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTuesdayEndAfterMidnight()
    {
        return $this->getData( 'TuesdayEndAfterMidnight' );
    }

    /**
     * @param string $TuesdayStart
     * @return $this
     */
    public function setTuesdayStart($TuesdayStart)
    {
        $this->setData( 'TuesdayStart', $TuesdayStart );
        $this->TuesdayStart = $TuesdayStart;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getTuesdayStart()
    {
        return $this->getData( 'TuesdayStart' );
    }

    /**
     * @param boolean $TuesdayWithinBounds
     * @return $this
     */
    public function setTuesdayWithinBounds($TuesdayWithinBounds)
    {
        $this->setData( 'TuesdayWithinBounds', $TuesdayWithinBounds );
        $this->TuesdayWithinBounds = $TuesdayWithinBounds;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTuesdayWithinBounds()
    {
        return $this->getData( 'TuesdayWithinBounds' );
    }

    /**
     * @param string $WednesdayEnd
     * @return $this
     */
    public function setWednesdayEnd($WednesdayEnd)
    {
        $this->setData( 'WednesdayEnd', $WednesdayEnd );
        $this->WednesdayEnd = $WednesdayEnd;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getWednesdayEnd()
    {
        return $this->getData( 'WednesdayEnd' );
    }

    /**
     * @param boolean $WednesdayEndAfterMidnight
     * @return $this
     */
    public function setWednesdayEndAfterMidnight($WednesdayEndAfterMidnight)
    {
        $this->setData( 'WednesdayEndAfterMidnight', $WednesdayEndAfterMidnight );
        $this->WednesdayEndAfterMidnight = $WednesdayEndAfterMidnight;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getWednesdayEndAfterMidnight()
    {
        return $this->getData( 'WednesdayEndAfterMidnight' );
    }

    /**
     * @param string $WednesdayStart
     * @return $this
     */
    public function setWednesdayStart($WednesdayStart)
    {
        $this->setData( 'WednesdayStart', $WednesdayStart );
        $this->WednesdayStart = $WednesdayStart;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return string
     */
    public function getWednesdayStart()
    {
        return $this->getData( 'WednesdayStart' );
    }

    /**
     * @param boolean $WednesdayWithinBounds
     * @return $this
     */
    public function setWednesdayWithinBounds($WednesdayWithinBounds)
    {
        $this->setData( 'WednesdayWithinBounds', $WednesdayWithinBounds );
        $this->WednesdayWithinBounds = $WednesdayWithinBounds;
        $this->setDataChanges( TRUE );
        return $this;
    }

    /**
     * @return boolean
     */
    public function getWednesdayWithinBounds()
    {
        return $this->getData( 'WednesdayWithinBounds' );
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


}

