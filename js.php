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

?>