<?php
<?
        $mailto="smanish168@gmail.com";
        $feedback_page = "feedback_form.html";
		$error_page = "error_message.html";
		$thankyou_page = "thank_you.html";
		$file="feedback_form.html";
        $pcount=0;
        $gcount=0;
        $subject = "Mail from Enquiry Form";

        $from="manish@strelkumpp.com";
        while (list($key,$val)=each($_POST))
        {
        $pstr = $pstr."$key : $val \n ";
        ++$pcount;

        }
        while (list($key,$val)=each($_GET))
        {
        $gstr = $gstr."$key : $val \n ";
        ++$gcount;

        }
        if ($pcount > $gcount)
        {
        $message_body=$pstr;
        mail($mailto,$subject,$message_body,"From:".$from);

        include("$file");
        }
        else
        {
        $message_body=$gstr;

        mail($mailto,$subject,$message_body,"From:".$from);
        include("$file");
        }
        ?>