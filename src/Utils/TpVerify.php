<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpVerify
{
    public function verify($passwd,$client,$transactionId)
    {
         if(Core::getAccountType()=="merchant")
         {
           $fields=array("merchantId"=>Core::getAccountId(),"password"=>$passwd,"transaction_id"=>$transactionId);
         }else
         {
            $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,"transaction_id"=>$transactionId);
         }

         $url = Core::getUrl() . "tpverify.php";

         return Request::sendPostRequest($url,$fields);
    }
}


?>