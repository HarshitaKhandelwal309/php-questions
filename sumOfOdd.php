<?php
  $total=0;
for($i=11 ; $i<30;$i++)
{
    if($i%2!=0)
    {
        echo $i."<br/>";
        
        $total = $total + $i;
    }
}
echo "The sum of odd number is" . "<br/>";
echo $total;
?>
