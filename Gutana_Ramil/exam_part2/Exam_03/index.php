<?php

        function isInfibonacciSequence(int $n){
            
            //create container array $arr for fibbonacci numbers
            $arr=array();
            //create a container for the output
            $strb='';
            
            //populate all fibonacci numbers and put it on array $arr
            for($b=0; $b<=$n;$b++){
                //if $b=0 then it is a Fibonacci Number
                if($b===0){
             
                    $arr[$b]=$b;

                }
                //or if $b=1 then it is a Fibonacci Number
                else if($b===1){
                    $arr[$b]=$b;
                }
                //or if not then get the 2 previous number within the array
                // example if array contains [0,1] for the 3rd number  
                // i will add 2 numbers before it then it become the 3rd Number
                // why 2 because array always starts at 0;
                // example $arr[2-1] =$arr[1] so 1 and $arr[2-2]=$arr[0] then 0
                // add the two numbers then the answer is 1 and put it inside the array
                else{
                    $temp=$arr[$b-1]+$arr[$b-2];
                    $arr[$b]=$temp;
                }
            }
            //this is the loop to check if a certain number is a fibbonacci Number
            for($c=0;$c<=$n;$c++){
                //it is certain that 0 is a Fibonacci number thats why I used a condition if c > 0
                if($c>0){
                    //now if c > 0 then i will check now if c is inside an array of fibonacci number which i make earlier
                    //if c is in array of fibonacci numbers then it is a Fibonacci number;
                    if(in_array($c,$arr)){
                        $strb.="${c} is a Fibonacci Number <br>";
                    }
                    else{
                        $strb.="${c} is not a Fibonacci Number <br>";
                    }
                }
          
            }
            return $strb;
        }
        //TEST CASES
       echo isInfibonacciSequence(10).'<br>';
       echo isInfibonacciSequence(11).'<br>';
       echo isInfibonacciSequence(34).'<br>';
       echo isInfibonacciSequence(100).'<br>';
       echo isInfibonacciSequence(1000).'<br>';
?>