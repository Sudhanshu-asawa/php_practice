<?php
$text = "SudhSudhanshu";
$extra ="Sudh";
echo "Original String:- $text <br>";
if (substr($text,0,strlen($extra))==$extra){
    $text=substr($text,strlen($extra));
}
echo "String after change:- $text";
?>