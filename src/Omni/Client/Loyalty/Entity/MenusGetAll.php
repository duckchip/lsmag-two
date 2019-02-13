<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use Ls\Omni\Client\RequestInterface;

class MenusGetAll implements RequestInterface
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property string $lastVersion
     */
    protected $lastVersion = null;

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $lastVersion
     * @return $this
     */
    public function setLastVersion($lastVersion)
    {
        $this->lastVersion = $lastVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastVersion()
    {
        return $this->lastVersion;
    }


}

