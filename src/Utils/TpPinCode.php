<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpPinCode
{
    public function change($passwd,$client,$sms,$email,$oldpin,$newpin,$oldpinblock)
    {
         if(Core::getAccountType()=="merchant")
         {
           $fields=array("merchantId"=>Core::getAccountId(),"password"=>$passwd,"client"=>$client,"oldpin"=>$oldpin,
           "newpin"=>$newpin,"sms"=>$sms,"email"=>$email,"oldpinblock"=>$oldpinblock);
         }else
         {
            $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,"client"=>$client,"oldpin"=>$oldpin,
            "newpin"=>$newpin,"sms"=>$sms,"email"=>$email,"oldpinblock"=>$oldpinblock);
         }

         $url = Core::getUrl() . "tppincode.php";

         return Request::sendPostRequest($url,$fields);
    }
}


?>