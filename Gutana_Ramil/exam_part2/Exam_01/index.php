<?php

    function isPalindrome(string $str){
        //Create a variable name $strb that contains removed spaces of the string $str;
        $strb=str_replace(' ','',$str);
        //Create a varible name $rev contains reversed strb which is trimmed spaces of $str
        $rev=strrev($strb);
        
        //Check if both $strb and $rev is the same even if $rev was reversed
        if($strb === $rev){
            return  "'$str' is a Palindrome <br>";

        }
        else{
            return "'$str' is not a Palindrome <br>";

        }
    }

    echo isPalindrome('madam or nurses run');
    echo isPalindrome('ABCDCBA');
    echo isPalindrome('madam');
    echo isPalindrome('damascus');
?>