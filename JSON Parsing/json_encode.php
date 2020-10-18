<?php
    // An associative array
    $marks = array("Peter"=>65, "Harry"=>80, "John"=>78, "Clark"=>90);
    echo json_encode($marks)."\n";
    // An indexed array
    $colors = array("Red", "Green", "Blue", "Orange", "Yellow");
    
    echo json_encode($colors)."\n";
    echo json_encode($colors, JSON_FORCE_OBJECT)."\n"; 
    print_r(json_decode(json_encode($marks)));   
    echo "\nThis was an object, pass true to get assoc array\n";
    print_r(json_decode(json_encode($marks),true));
    echo"\n\n";
    echo "\nIf array is indexed, then it will be array after decode not object by default\n";
    print_r(json_decode(json_encode($colors)));   
?>