<?php


    function dateDifference($date1,$date2){
        //I create 2 variable which will later contains a date;
        $date1b=null;
        $date2b=null;
        //I will check if date1 is greater than date2 and vice versa if it is greater then the date will be the minuend and the other is the subtrahend
        if($date1 > $date2){
            $date1b=date_create($date1);
            $date2b=date_create($date2);
        }
        else{
            $date1b= date_create($date2);
            $date2b= date_create($date1);
        }
         //I will now get the difference of 2 dates it will return an object formatted by y for years, m for months and d for days
        $interval=date_diff($date1b,$date2b);
        echo $interval->y . " years, " . $interval->m." months, ".$interval->d." days <br>";
       
    }

    //TEST CASES
    dateDifference("2018-04-05","2019-05-31");
    dateDifference("1998-11-03","2020-11-03");
    dateDifference("1861-06-19","2020-11-03");
    dateDifference("1863-11-30","2020-11-03");
    dateDifference("1967-02-06","2021-03-11");


?>