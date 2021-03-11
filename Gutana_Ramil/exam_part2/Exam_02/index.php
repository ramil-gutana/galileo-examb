<?php

    function createAFile($filetext){
        //create a file name named hello_there.php
        $file_name='hello_there.php';
        //create a file contains the filename and the permision w is for writing inside the file  
        $this_file=fopen($file_name,"w");
        //it will write now the text from the file that has been created
        fwrite($this_file,$filetext);
        //it will stop once the file write is finished
        fclose($this_file);
    }

    $p='<?php
     // This is a comment
    echo “This is a test page!”;
    echo “Exam number two!”;
    // This is the end of a comment';
    $c='<?php echo "Hello B"?>';
    $d='<?php adsada?>';
    createAFile($c);
    createAFile($d);
    createAFile($p);



?>