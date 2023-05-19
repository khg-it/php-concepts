<?php
     /*
       php datatypes
       1.string
       2.integer
       3.float
       4.boolean
       5.object
       6.array
       7.null
     */
    $name="harry";
    $friend='rohan';
    echo "$name ka friend $friend<br>";
    //integer-non decimal number
    $income=455;
    $debts=-655;
    echo $income;
    echo "<br>";
    echo $debts;
    echo "<br>";
    //float -decimal point number
    $income=344.5;
    $debts=45.6;
    echo $income;
    echo "<br>";
    echo $debts;
    echo "<br>";
    // boolean true or false
    $x=true;
    $is_friend=false;
    echo var_dump($x);
    echo "<br>";
    echo var_dump($is_friend);
    echo "<br>";
    //objects-instances of classes
    //employee is a class-->harry can be one object
    //array-used to store multiple value in a single variable
    $friends=array("rohan","shubham","skillf","larry");
    echo var_dump($friends);
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[2];
    echo "<br>";
    echo $friends[3];
    echo "<br>";
    //null
    $name=NULL;
    echo var_dump($name);
?>