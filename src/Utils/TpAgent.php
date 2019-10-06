<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Utils;

class TpAgent
{
    public function info($passwd,$terminalId)
    {
        $fields=array("agentId"=>Core::getAccountId(),"password"=>$passwd,"terminalId"=>$terminalId);

        $url = Core::getUrl() . "tpagent.php";

        return Request::sendPostRequest($url,$fields);
    }
}

?>