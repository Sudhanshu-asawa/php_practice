<?php
function bubblesort($arr){
    for($i=0;$i<count($arr)-1;$i++){
        for($j=0;$j<count($arr)-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $ex=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1] = $ex;
            }
        }
    }
    return $arr;
        
}
$arr=array(1,5,2,6,8,3,0);

echo "Without sort :- ".implode("  ",$arr)."<br>";
echo "After Bubble Sort :- ".implode("  ",bubblesort($arr));

?>