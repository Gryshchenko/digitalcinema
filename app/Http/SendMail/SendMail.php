<?php

namespace App\Http\SendMail;

class SendMail
{
    public function send_mail($email, $content, $subject)
    {
        $encoding = "utf-8";
        $subject_preferences = array(
            "input-charset" => $encoding,
            "output-charset" => $encoding,
            "line-length" => 76,
            "line-break-chars" => "\r\n"
        );
        $header = "Content-type: text/html; charset=".$encoding." \r\n";
        $header .= "From: no-reply@hypertube.com \r\n";
        $header .= "MIME-Version: 1.0 \r\n";
        $header .= "Content-Transfer-Encoding: 8bit \r\n";
        $header .= "Date: ".date("r (T)")." \r\n";
        $header .= iconv_mime_encode("Subject", $subject, $subject_preferences);
        if (mail($email, $subject, $content, $header))
            return "OK";
        return "NE OK";
    }
}

?>
