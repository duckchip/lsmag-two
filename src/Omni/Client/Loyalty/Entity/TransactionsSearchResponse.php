<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class TransactionsSearchResponse implements ResponseInterface
{

    /**
     * @property ArrayOfTransaction $TransactionsSearchResult
     */
    protected $TransactionsSearchResult = null;

    /**
     * @param ArrayOfTransaction $TransactionsSearchResult
     * @return $this
     */
    public function setTransactionsSearchResult($TransactionsSearchResult)
    {
        $this->TransactionsSearchResult = $TransactionsSearchResult;
        return $this;
    }

    /**
     * @return ArrayOfTransaction
     */
    public function getTransactionsSearchResult()
    {
        return $this->TransactionsSearchResult;
    }

    /**
     * @return ArrayOfTransaction
     */
    public function getResult()
    {
        return $this->TransactionsSearchResult;
    }


}

