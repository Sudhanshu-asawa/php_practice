<?php
$string = 'The quick brown fox jumps over the lazy dog';
$arr=explode(" ",$string);
for($i=0;$i<6;$i++){
    echo $arr[$i]." ";
}
?>