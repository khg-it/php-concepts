<?php
    echo "welcome to function"."<br>";

    function processmarks($marksArr){
        $sum=0;
        foreach($marksArr as $value)
        {
            $sum+=$value;
        }
        return $sum;
    }
    $rohan=[34,98,45,12,98,93];
    $summarks=processmarks($rohan);
    echo "total marks scored by rohan out of 600 is $summarks: ";
?>