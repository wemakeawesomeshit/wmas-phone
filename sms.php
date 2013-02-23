<?php

// construct the email body
$body = "New SMS received from ".$_POST['From']."

".$_POST['Body'];

// email the sms to us
mail("f.ckers@wemakeawesomesh.it", "new sms", $body);

// the respond with our contact details in an sms
?>
<Response>
  <Sms>f.ckers@wemakeawesomesh.it
- wemakeawesomesh.it
- @wemakeawesomesh
- fb: wemakeawesomesh</Sms>
</Response>