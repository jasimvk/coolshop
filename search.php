<?php
// Implement in the programming language of your choice 一 among NodeJS, PHP, and C# 一a script to be executed from the command line.
// You can use third-party libraries if you want.
// The script receives as input the path to a CSV file to be imported, a column number in which to search, and a search key.

// The script must be invoked in this way (example in PHP):

// $ php src/search.php ./file.csv 2 Alberto

// where ./file.csv is the path to a CSV file formatted in this way:
// 1,Rossi,Fabio,01/06/1990;
// 2,Gialli,Alessandro,02/07/1989;
// 3,Verdi,Alberto,03/08/1987;

// The number 2 represents the index of the column to search in (in the previous file the name) and Alberto represents the search key.

// The output of the command must be the corresponding line, in our case: 3, Verdi, Alberto,03/08/1987;

// Delivery is expected in public Git repository format, on GitHub, or similar


// We'll be evaluating:
// the suitability of the solution to the request                                                                                                                                                                             
// code quality (legibility and maintainability)                                                                                                                                                                   
// You will have at your disposal 3 days to complete and return it.



// get the input from the arguments
$filename = $argv[1]; //path to the CSV file
$column_num = $argv[2]; // index of the column to search in 
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