<?php
/*
Error reporting helps you understand what's wrong with your code, remove in production.
*/
#error_reporting(E_ALL); 
#ini_set('display_errors', 1);
$output = exec("python svr.py");
echo $output;
    	return $output;

//echo $read;
?>