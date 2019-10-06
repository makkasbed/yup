<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Funds;

class TpCredit
{
    public function credit($passwd,$client,$amount,$currency,$trxcode,$type,$description,$sms,$email,$refId)
    {
       if(Core::getAccountType=="merchant")
       {
        $fields=array("password"=>$passwd,"client"=>$client,"amount"=>$amount,"currency"=>$currency,
        "trxcode"=>$trxcode,"type"=>$type,"description"=>$description,"sms"=>$sms,"email"=>$email,
        "merchantId"=>Core::getAccountId(),"referenceId"=>$refId);
       }else
       {
        $fields=array("password"=>$passwd,"client"=>$client,"amount"=>$amount,"currency"=>$currency,
        "trxcode"=>$trxcode,"type"=>$type,"description"=>$description,"sms"=>$sms,"email"=>$email,
        "agentId"=>Core::getAccountId(),"referenceId"=>$refId);
       } 
      
      $url = Core::getUrl()."tpcredit.php";

      //send request to api
      return Request::sendPostRequest($url, $fields);
       
    }
}

?>