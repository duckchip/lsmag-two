<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\Loyalty\Entity\Enum\StatusCode;
use \Ls\Omni\Exception\InvalidEnumException;
use \Ls\Omni\Client\ResponseInterface;

class PingStatusResponse implements ResponseInterface
{

    /**
     * @property StatusCode $PingStatusResult
     */
    protected $PingStatusResult = null;

    /**
     * @param StatusCode|string $PingStatusResult
     * @return $this
     * @throws InvalidEnumException
     */
    public function setPingStatusResult($PingStatusResult)
    {
        if ( ! $PingStatusResult instanceof StatusCode ) {
            if ( StatusCode::isValid( $PingStatusResult ) ) 
                $PingStatusResult = new StatusCode( $PingStatusResult );
            elseif ( StatusCode::isValidKey( $PingStatusResult ) ) 
                $PingStatusResult = new StatusCode( constant( "StatusCode::$PingStatusResult" ) );
            elseif ( ! $PingStatusResult instanceof StatusCode )
                throw new InvalidEnumException();
        }
        $this->PingStatusResult = $PingStatusResult->getValue();

        return $this;
    }

    /**
     * @return StatusCode
     */
    public function getPingStatusResult()
    {
        return $this->PingStatusResult;
    }

    /**
     * @return StatusCode
     */
    public function getResult()
    {
        return $this->PingStatusResult;
    }


}

