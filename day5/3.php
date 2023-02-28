<?php
function rev($str){
    $arr=array();
    $len = strlen($str);
    for($i=$len;$i>0;$i--){
        $arr[$len-$i]=$str[$i-1];
    }

    return implode("", $arr);;
}
function palaindrome($str){
    $rev = rev($str);
    if($str==$rev){
        echo "$str is a palaindrome<br>";
    }
    else{
        echo "$str is not a palaindrome";
    }

}
palaindrome("naman");
palaindrome("sudhanshu");

?>