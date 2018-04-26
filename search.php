<?php
require "./config/init.php";

//collect

if(isset($_GET['search'])) {
    
    $make = mysql_real_escape_string($_GET['make']);
    $model = mysql_real_escape_string($_GET['model']);
    $make = preg_replace("#[^0-9a-z]#i","",$make);
    $model = preg_replace("#[^0-9a-z]#i","",$model);
    
    
    $query  = mysql_query("SELECT * FROM cars make LIKE '%$make%' OR model LIKE '%$model%'") or die("could not search.");
    
    $count = mysql_num_rows($query);
    
    if($count == 0) {
        
        $output = 'No results available';
    }else {
        while($row = mysql_fetch_array($query)) {
            
            $Make = $row['make'];
            $Model = $row['model'];
            
            $output .= '<div> ' .$Make.' '.$Model.'</div>';
        }
    }
    
    
    
}


?>