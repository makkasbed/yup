<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpReversal
{
    public function reverse($passwd,$terminalId,$transactionId)
    {
        if(Core::getAccountType()=="agent")
        {
            $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,
            "terminalId"=>$terminalId,"transactionid"=>$transactionId);
        }else
        {
            $fields=array("merchantId"=>Core::getAccountId(),"password"=>$passwd,
        "terminalId"=>$terminalId,"transactionid"=>$transactionId);
        }
        

        $url = Core::getUrl() . "tpreversal.php";

        return Request::sendPostRequest($url,$fields);
    }
}

?>