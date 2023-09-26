<?php
$text = "The quick brown fox jumps over the lazy dog.";


function stringToLowerCase($text){
	$lowerCaseString =  strtolower( $text );
    echo str_replace("brown","red", $lowerCaseString);
    
}

stringToLowerCase($text);
?> 

