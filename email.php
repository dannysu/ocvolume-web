<?php
$header = "From: " . $sender . " <" . $from . ">\r\n";

$success = mail($to, "OC Volume", $msg, $header);

if ($success == 1){
    echo "Successfully sent to " . $to;
}
else{
    echo "E-Mail failed to send";
}

?>