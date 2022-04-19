<?php
    
    //Get the inputs
    $filename = $argv[1]; // path to a CSV file
    $column_num = $argv[2]; //  the index of the column to search in
    $key = $argv[3]; // represents the search key
    
    
    if (($fp = fopen($filename, "r")) !== false) {
        while (($row = fgetcsv($fp)) !== false) {
            
            if($row[$column_num] === $key) {
                echo  $row[0] . ', ' . $row[1] . ', ' . $row[2] . ', ' . $row[3] . "\n";
            }
        }
        fclose($fp);
    }

    ?>



