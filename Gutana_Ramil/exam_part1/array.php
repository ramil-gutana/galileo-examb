<?php

    function checkNoOfOccurences(){
        $arr=['Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian'];
        $b=array_count_values($arr);
        array_multisort(array_values($b), SORT_DESC, array_keys($b), SORT_ASC, $b);
        foreach($b as $key => $value){
            echo $key .' - '. $value. '<br>';
        }
    }
    function sortArrayAscending(){
        $num=[9863, 7127, 2020, 80, 131, 55, 100];
        for($b=0;$b<count($num);$b++ ){
            if($num[$b]%2==1){
                $num[$b]=round($num[$b]/10) * 10;
            }   
        }
        sort($num);
        foreach($num as $c){
            echo $c.'<br>';
        }
    }
    function displayNonRepetitive(){
        $arr=['red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold'];
        $b=array_count_values($arr);
        $barr=array();
        $c=0;
        foreach($b as $key=>$value){
            if($value ===1){
                $barr[$c]=$key;
                $c++;
            }
        }
       print_r($barr);
    }
    echo 'Display Value with No of Occurences <br>';
    checkNoOfOccurences();
    echo 'Sorted Array Ascending <br>';
    sortArrayAscending();
    echo 'Display Non Repetitive value <br>';
    displayNonRepetitive()








?>