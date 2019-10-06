<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpBillerList
{
    public function listAll($passwd,$mode,$paybillgroup)
    {
         
        $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,"mode"=>$mode,
        "paybillgroup"=>$paybillgroup);
         

         $url = Core::getUrl() . "tpbillerlist.php";

         return Request::sendPostRequest($url,$fields);
    }
}


?>