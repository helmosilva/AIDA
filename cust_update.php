<?php

require './config/init.php';

        if (isset($_POST['update'])) {
            
            $name = mysqli_real_escape_string($mysqli_conn, $_POST['name']);
            $email = mysqli_real_escape_string($mysqli_conn, $_POST['email']);
            
                    $query = "UPDATE AIDA_account SET name = '$name', email = '$email' WHERE name = '". $_SESSION['user'] . "'";
        	        $result = mysqli_query ($mysqli_conn, $query);
                
                    
                       echo "Successfully updated. <br>
                            Details will be updated on your next login.<br>";
                        echo "Go to <a href= 'index.php'> Homepage</a>";
            
                       	header ("Location: customerpage.php");
        } else {
                       echo "Error when updating...Please try again.";
            }
    
?>