<?php

#concat may be familiar to some devs: concat($val1, $val2, etc);
function concat(){
    $args_length = func_num_args();
    $output = "";
    for($i = 0; $i < $args_length; ++$i){
        $output .= (func_get_arg($i));
    }
    return $output;
}

#Simple Console Log using JavaScript <script> tags
function console_log($output){
	$new_out = json_encode($output, JSON_HEX_TAG);
    echo "<script>console.log($new_out);</script>";
}

#Get length of string or an array

function length($val){
    if(getType($val) == "string" || getType($val) == "array"){
        $counter = 0;
        while($val[$counter] != NULL){
            ++$counter;
        }
        return ($counter);
    }else{
        return "Length Error: Use A Valid Data Type";
    }

    #Ouputs true/false if str contains substr

    function includes($str, $substr){
        $output = FALSE;
        (strpos($str, $substr) != FALSE) ? $output = TRUE: $output = FALSE;
        return $output;
    }
    
}

?>
