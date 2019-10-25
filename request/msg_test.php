<?php

class sendSms
{
    var $serverURL = 'http://api.myvaluefirst.com/psms/servlet/psms.Eservice2';
    var $uid = 'aicte';    //Your Username provided by ValueFirst
    var $pwd = 'Ai909ctE';   
    var $cdmaNumber = '9664740225';//Write your Sender ID for CDMA here
    var $gsmSender = 'AICTED';
    function GetSenderID()
    {
        return $this->cdmaNumber;
        //Write here your Logic of choosing a sender ID     
   
    }
    function getSender(){
        return $this->gsmSender;
    }
    function get_address($to)
    {
        /*
        You may repeat the Address from and to multple time.
        You may also have to make SEQ unique each time. Delivery reports are returned on the basis
         of GUID (REturned by the server) and SEQ.
        */
        $address_info = sprintf('<ADDRESS FROM="%s" TO="%s" SEQ="%s" />',$this->getSender(),$to,1);
        return $address_info;
    }
    function postdata($url,$data)
    {
    //The function uses CURL for posting data to server
        $objURL = curl_init($url);
        curl_setopt($objURL, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($objURL,CURLOPT_POST,1);
        curl_setopt($objURL, CURLOPT_POSTFIELDS,$data);
        $retval = trim(curl_exec($objURL));
        curl_close($objURL);
        return $retval;
    }
    function sendSmsToUser( $content='', $toAddr='', $signature='',$ID,$smsType,$smsModule)
    {
//@abhey gupta abhey.gupta@vfirst.com =while creating xml string never lead space in the start , it create extra + characters for post url
        $xmlstr = <<<XML
<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE MESSAGE SYSTEM "http://127.0.0.1/psms/dtd/message.dtd" >
<MESSAGE>
<USER USERNAME="%s" PASSWORD="%s"/>
<SMS  UDH="0" CODING="1" TEXT="%s" PROPERTY="0" ID="2">
%s
</SMS>
</MESSAGE>
XML;
		if( $content!='' )
        {
			
            $content = stripslashes($content.$signature);      
			$content = htmlentities($content,ENT_COMPAT);
            $xmldata = sprintf($xmlstr,$this->uid,htmlentities($this->pwd),$content,$this->get_address($toAddr));
            $data='data='. urlencode($xmldata);	
            $action='action=send';
            $str_response = $this->postdata($this->serverURL,$action.'&'.$data);   
            $str_request = $this->serverURL.'?'.$action.'&'.$data;         
			if ($str_response=="")
            {
                $str_response = "REQUEST FAILED \t";
            }else{
                $str_response;
            }
			include("connection.php");
			$smsSentTo=substr($toAddr, -10);
			$smsSplitCount=intval (strlen ($content));
			$insertSMS = "INSERT INTO sms (ID,template, smsType,smsSplitCount,smsModule,smsSentTo)
									VALUES('$ID','$content','$smsType','$smsSplitCount','$smsModule','$smsSentTo');";
									
									
			if(mysqli_query($conn,$insertSMS))
			{
				return true;          
			}else{
				return false;
			}
			mysqli_close($conn);
        }
        else
        {
            return false;
        }
    }
}


?>
