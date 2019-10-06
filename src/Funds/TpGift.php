<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Funds;

class TpGift
{
    public function gift($passwd,$sender,$recipient,$amount,$currency,$trxcode,$type,$description,$sms,
    $email,$refId,$message)
    {
       if(Core::getAccountType=="merchant")
       {
        $fields=array("password"=>$passwd,"sender"=>$sender,"recipient"=>$recipient,"amount"=>$amount,"currency"=>$currency,
        "trxcode"=>$trxcode,"type"=>$type,"description"=>$description,"sms"=>$sms,"email"=>$email,
        "merchantId"=>Core::getAccountId(),"referenceId"=>$refId,"smstxt"=>$message);
       }else
       {
        $fields=array("password"=>$passwd,"sender"=>$sender,"recipient"=>$recipient,"amount"=>$amount,"currency"=>$currency,
        "trxcode"=>$trxcode,"type"=>$type,"description"=>$description,"sms"=>$sms,"email"=>$email,
        "agentId"=>Core::getAccountId(),"referenceId"=>$refId,"smstxt"=>$message);
       } 
      
      $url = Core::getUrl()."tpgift.php";

      //send request to api
      return Request::sendPostRequest($url, $fields);
       
    }
}


?>