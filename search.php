<?php
    
    $filename = $argv[1];
    $column_num = $argv[2];
    $key = $argv[3];
    
    
    if (($fp = fopen($filename, "r")) !== false) {
        while (($row = fgetcsv($fp)) !== false) {
            
            if($row[$column_num] === $key) {
                echo  $row[0] . ', ' . $row[1] . ', ' . $row[2] . ', ' . $row[3] . "\n";
            }
        }
        fclose($fp);
    }

    ?>
    


