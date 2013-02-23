<?php
include('swearwords.php');
?>

<Response>
  <Say><?php echo $swearword; ?></Say>
  <Redirect>index.php</Redirect>
</Response>