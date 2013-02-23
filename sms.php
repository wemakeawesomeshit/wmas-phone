<?php

include("config.php");

// construct the email body
$body = "New SMS received from ".$_POST['From']."

".$_POST['Body'];

// email the sms to us
mail($recipient, "new sms", $body);

// the respond with our contact details in an sms
?>
<Response>
  <Sms><?php echo $recipient; ?></Sms>
</Response>