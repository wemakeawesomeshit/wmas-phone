<?php

// include the menu configuration
include('menu.php');

// get the redirect url
$redirect = $options[$_POST['Digits']]['url'];

?>
<Response>
    <Redirect><?php echo $redirect; ?></Redirect>
</Response>