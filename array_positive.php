<?php
$numbers = [10, -17, 21, -35, 35, -80, 95];

 $empty_array=[];
function positiveArray($arr)
{
    foreach($arr as $i)
    {
       echo $i;
       if($i>0)
       {
        $empty_array[$i];
       }
  return $empty_array;
    }
    
}

$positive =  positiveArray($numbers);

echo $positive;
?>
