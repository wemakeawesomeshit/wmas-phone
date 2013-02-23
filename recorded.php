<?php

// strip the data for all we need
$data = array(
  "From" => $_REQUEST['From'],
  "FromCity" => $_REQUEST['FromCity'],
  "FromCountry" => $_REQUEST['FromCountry'],
  "RecordingUrl" => $_REQUEST['RecordingUrl'],
  "Time" => date(),
  
);

// email us the details
mail("f.ckers@wemakeawesomesh.it", "New voicemail: ".$_REQUEST['CallSid'], print_r($data, true));

?>
<Response>
  <Say>Thanks we'll get back to you when we can smile e face</Say>
  <Gather action="gather.php" numDigits="1">
    <Say voice="woman">Press 0 to go back to the main menu, or just hang up now</Say>
  </Gather>  
</Response>