<?php
// Sample IP address
$ip = "172.16.155.1";
 
// Validate sample IP address (WE could also use FILTER_FLAG-IPV4 instead)
if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
    echo "The <b>$ip</b> is a valid IPV6 address";
} else {
    echo "The <b>$ip</b> is not a valid IPV6 address";
}
?>