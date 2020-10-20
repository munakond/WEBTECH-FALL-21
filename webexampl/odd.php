<?php
    $total=100;
    $odd="Odd Number : ";
    
    for($i=10;$i<=$total;$i++)
    {
        if($i%2!=0)
        {
            $odd.=$i.","."<br>";
        }
    }   
    echo $odd;
?>