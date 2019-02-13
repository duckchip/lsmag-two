<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\RequestInterface;

class ResetPassword implements RequestInterface
{

    /**
     * @property string $userName
     */
    protected $userName = null;

    /**
     * @property string $resetCode
     */
    protected $resetCode = null;

    /**
     * @property string $newPassword
     */
    protected $newPassword = null;

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $resetCode
     * @return $this
     */
    public function setResetCode($resetCode)
    {
        $this->resetCode = $resetCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getResetCode()
    {
        return $this->resetCode;
    }

    /**
     * @param string $newPassword
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }


}

