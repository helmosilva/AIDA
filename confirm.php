<?php
    require 'header.php';
    require 'navbar.php';

    $name= $_GET['name'];
    $code= $_GET['code'];
    
    $query = mysql_query("SELECT * FROM AIDA_account WHERE name= '$name'");
    
    
    while($row = mysql_fetch_assoc($query)) {
        
        $db_code = $row['code'];
    }
    
    if ($code == $db_code) {
        
        mysql_query("UPDATE `AIDA_account` SET `confirmed`='1',`code`='0'");
        
        echo "Thanks. Your email has been confirmed.";
        
    } else {
        
        echo "username and code don't match";
    }
    
    require 'footer.php';
?>