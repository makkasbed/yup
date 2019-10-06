<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpEnrollment
{
    public function create($passwd,$client,$first_name,$last_name,$idnumber,$bankaccount,$terminalId,$sms,
    $referenceId)
    {
        
           $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,"client"=>$client,"firstname"=>$first_name,
        "lastname"=>$last_name,"idnumber"=>$idnumber,"bankaccount"=>$bankaccount,"terminalId"=>$terminalId,
         "sms"=>$sms,"referenceId"=>$referenceId);
        

         $url = Core::getUrl() . "tpenrollment.php";

         return Request::sendPostRequest($url,$fields);
    }
}


?>