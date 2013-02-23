<?php

// include the menu configuration
include('config.php');

// get the redirect url
$redirect = $menu[$_POST['Digits']]['url'];

?>
<Response>
    <Redirect><?php echo $redirect; ?></Redirect>
</Response>