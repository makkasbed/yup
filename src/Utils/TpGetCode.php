<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpGetCode
{
    public function getCode($passwd,$client,$pin,$pinblock,$maxamount,$currency)
    {
         if(Core::getAccountType()=="merchant")
         {
           $fields=array("merchantId"=>Core::getAccountId(),"password"=>$passwd,"client"=>$client,"pin"=>$pin,
           "pinblock"=>$pinblock,"maxamount"=>$maxamount,"currency"=>$currency);
         }else
         {
            $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,"client"=>$client,"pin"=>$pin,
            "pinblock"=>$pinblock,"maxamount"=>$maxamount,"currency"=>$currency);
         }

         $url = Core::getUrl() . "tpgetcode.php";

         return Request::sendPostRequest($url,$fields);
    }
}


?>