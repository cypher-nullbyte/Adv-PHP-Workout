<?php
    $ip="172.16.155.1";
    if(filter_var($ip,FILTER_VALIDATE_IP))
    {
        echo "The <b>$ip</b> is valid IP address";
    }
    else echo "The <b>$ip</b> is not a valid IP address";
?>