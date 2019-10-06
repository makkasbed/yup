<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Transfers;

class TpDepositTrf
{
    public function deposit($amount, $buyerid,$passwd,$terminalId,$currency)
    {
   
       $fields= array("amount"=>$amount,"buyerid"=>$buyerid,"password"=>$passwd,"terminalId"=>$terminalId,
       "currency"=>$currency);

        $url = Core::getUrl() . "tpdeposittrf.php";

        return Request::sendPostRequest($url,$fields);
    }
}

?>