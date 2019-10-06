<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpHistory
{
    public function statement($passwd,$client,$pin,$pinblock,$maxamount,$currency,$terminalId,$statement)
    {
         if(Core::getAccountType()=="merchant")
         {
           $fields=array("merchantId"=>Core::getAccountId(),"password"=>$passwd,"client"=>$client,"pin"=>$pin,
           "pinblock"=>$pinblock,"terminalId"=>$terminalId,"currency"=>$currency,"statement"=>$statement);
         }else
         {
            $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,"client"=>$client,"pin"=>$pin,
            "pinblock"=>$pinblock,"terminalId"=>$terminalId,"currency"=>$currency,"statement"=>$statement);
         }

         $url = Core::getUrl() . "tphistory.php";

         return Request::sendPostRequest($url,$fields);
    }
}


?>