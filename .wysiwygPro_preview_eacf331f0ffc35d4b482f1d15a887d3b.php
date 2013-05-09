<?php
if ($_GET['randomId'] != "KwTZ2l2ocAxUAHkc4NIAMrfnq_4DP_FETJtgHtcXjiXbbju2Q5zUDJHJdAVMfcxu") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
