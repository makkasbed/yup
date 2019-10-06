<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpAudit
{
    public function log($terminalId,$audit,$description)
    {
        
        $fields=array("terminalId"=>$terminalId,"audit"=>$audit,"description"=>$description);
    
        $url = Core::getUrl() . "tpaudit.php";

        return Request::sendPostRequest($url,$fields);
    }
}

?>