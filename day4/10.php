<?php
$char = 'b';
$nextchar = ++$char; 

if (strlen($nextchar) > 1) 
{
 $nextchar = $nextchar[0];
 }
echo $nextchar."<br />";
?>