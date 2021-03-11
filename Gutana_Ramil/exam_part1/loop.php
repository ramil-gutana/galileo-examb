<?php 


    function sumOfEvenUsingWhileLoop(){
       $number = 0;
       $sum=0;
       while($number <= 10){
            if($number % 2 == 0){
                $sum+=$number;
            }
            $number++;
       }
       
       return $sum;

    }

    function displayOddUsingDoWhile(){
        $number=0;
        do{
            if($number % 2==1){
                echo $number. '<br>';
            }
            $number++;
        }
        while($number <=10);

    }
    function fibonacciSequence(){
        $arr=array();
        $strb='';
        for($i=0;$i<10;$i++){
            if($i==0){
                $arr[$i]=$i;
            }
            else if($i==1){
                $arr[$i]=$i;
            }
            else{
                $temp=$arr[$i-1] + $arr[$i-2];
                $arr[$i]=$temp;
            }
        }
        //print All from array $arr;
        for ($b=0; $b<count($arr);$b++){
            $strb.= $arr[$b].'<br>';
        }
        echo $strb;
    }
    echo 'The Sum of All even Numbers from 0-10 is <br>'.sumOfEvenUsingWhileLoop().'<br>';
    echo 'The Odd numbers from 0-10 are'.'<br>';
    displayOddUsingDoWhile();
    echo 'The Fibbonacci Sequence from 0-10 are'.'<br>';
    fibonacciSequence();
?>