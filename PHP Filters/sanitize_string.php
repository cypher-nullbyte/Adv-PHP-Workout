<?php
    $comment="<h1>Hello People! <br> How are you doing :) </h1>";
    echo "<div style=\"text-align:center\">".$comment."</div>";
    echo "<br><hr><br>";
    $sanitized_comment=filter_var($comment,FILTER_SANITIZE_STRING);
    echo "<p style=\"text-align:center\">".$sanitized_comment."</p>";
?>