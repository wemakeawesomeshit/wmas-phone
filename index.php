<?php

// include the menu configuration
include('menu.php');

?>
<Response>
    <Gather action="gather.php" numDigits="1">
        <Say voice="woman">Hey, welcome to the we make awesome shit hotline.</Say>
        <Say voice="man">My name is Bob.</Say>
        <Say voice="woman">And my name is Jane.</Say>
        <Say voice="man">We are here to guide you through this simple phone menu.</Say>
        <?php
          $count = 0;
          foreach ($options as $option) {
            $voice = ($count % 2) ? "man" : "woman";
            ?>
            <Say voice="<?php echo $voice; ?>"><?php echo $option['say']; ?></Say>
            <?php 
            $count++;
          } ?>
    </Gather>
</Response>