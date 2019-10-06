<?php

use Yup\Core;
use Yup\Request;

namespace Yup\Bills;

class TpPayBill
{
   public function payBill($mobile,$passwd,$terminalId,$pin,$pinblock,$amount,$currency,$method,
                          $billId,$sms,$mode,$option)
   {
       if(Core::getAccountType()=="merchant")
       {
        $fields = array("mobile"=>$mobile,"password"=>$passwd,"terminalId"=>$terminalId,
        "merchantId"=>Core::getAccountId(),"pin"=>$pin,"pinblock"=>$pinblock,
        "amount"=>$amount,"currency"=>$currency,"billId"=>$billId,"sms"=>$sms,
        "mode"=>$mode,"option"=>$option);
       }else
       {
        $fields = array("mobile"=>$mobile,"agentId"=>Core::getAccountId(),"password"=>$passwd,"terminalId"=>$terminalId,
       "pin"=>$pin,"pinblock"=>$pinblock,
        "amount"=>$amount,"currency"=>$currency,"billId"=>$billId,"sms"=>$sms,
        "mode"=>$mode,"option"=>$option);
       }
       
       $url = Core::getUrl() . "tppaybill.php";                
       return Request::sendPostRequest($url, $fields);                
   }
}

?>