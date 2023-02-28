<?php
function rev($str){
    $arr=array();
    $len = strlen($str);
    for($i=$len;$i>0;$i--){
        $arr[$len-$i]=$str[$i-1];
    }

    return implode("", $arr);;
    
}
$str="sudhanshu";
echo "Original string is :- ".$str."<br>";
echo "Reversed string is :- ".rev($str);
?>