<?php
    
    // $file = fopen("file.csv","r");
    // // Read first line
    // echo fgets($file);
    // // Move back to beginning of file
    // fseek($file,1);
    // fclose($file);
    // echo file_get_contents("file.csv");

    // if (isset($argc)) {
          //echo "test".$argv[0];
          $filename = $argv[1];
          //echo $filename;
        //   $file = fopen( $filename, 'r');
        //     while (($line = fgetcsv($file)) !== FALSE) {
        //     print_r($line[$argv[2]]);
        //     }
        //     fclose($file);

        $csv = array_map('str_getcsv', file($filename));
        echo $csv[$argv[2]];

    //  }
  
?>


