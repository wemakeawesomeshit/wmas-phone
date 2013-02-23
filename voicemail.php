<Response>
  <Say>Please leave your message and email address after the beep.</Say>
  <Record timeout="10" maxLength="10" action="recorded.php?id=<?php echo $_GET['id']; ?>" transcribeCallback="transcribed.php?id=<?php echo $_GET['id']; ?>" transcribe="true" />
</Response>