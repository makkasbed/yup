<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpBlockClient
{
    public function block($passwd,$terminalId,$transactionId,$sms,$email,$description)
    {
        if(Core::getAccountType()=="agent")
        {
            $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,
            "terminalId"=>$terminalId,"referenceid"=>$transactionId,"sms"=>$sms,"email"=>$email,"description"=>$description);
        }else
        {
            $fields=array("merchantId"=>Core::getAccountId(),"password"=>$passwd,
            "terminalId"=>$terminalId,"referenceid"=>$transactionId,"sms"=>$sms,"email"=>$email,"description"=>$description);
        }
        

        $url = Core::getUrl() . "tpblockclient.php";

        return Request::sendPostRequest($url,$fields);
    }
}

?>