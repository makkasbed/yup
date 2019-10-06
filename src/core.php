<?php

namespace Yup;

class Core
{
    //defines the mode of the client i.e. live, test and its corresponding url
    public $mode;
    public $url;
    //account type i.e. merchant or agent
    public $accountType;
    //account id i.e. merchant or agent ID
    public $accountId;

    public function setMode($mode)
    {
        $this->mode=$mode;
    }

    public function setUrl()
    {
        if($this->mode=="live")
        {
            $this->url="https://tagpay.fr/api/";
        }else
        {
            $this->url="https://demo.tagpay.fr/api/";
        }
    }
    public function setAccountType($accountType)
    {
        $this->accountType=$accountType;
    }
    public function setAccountId($accountId)
    {
       $this->accountId=$accountId;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function getAccountId()
    {
        return $this->accountId;
    }
    public function getAccountType()
    {
        return $this->accountType;
    }
    
}

?>