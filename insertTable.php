<?php 
		
		require "header.php";
		require"navbar.php";
		
    require "./config/init.php";
    
    
    $query_str = "INSERT INTO cars VALUES (null, 'pn52bbp', 'citroen', 'c2', '2002-03-07', 'petrol', 5)";
    $mysqli_conn -> query($query_str);

	$query_str = "INSERT INTO cars VALUES (null, 'jl57bnm', 'vauxhall', 'astra', '2007-07-20', 'petrol', 5)";
    $mysqli_conn -> query($query_str);
    
    $query_str = "INSERT INTO cars VALUES (null, 'po60tuy', 'volkswagen', 'polo', '2010-01-09', 'diesel', 5)";
    $mysqli_conn -> query($query_str);
    
    $query_str = "INSERT INTO cars VALUES (null, 'ae09plm', 'kia', 'ceed', '2009-02-03', 'petrol', 3)";
    $mysqli_conn -> query($query_str);
	//inform the user that data was inserted
	
	if ($mysqli_conn -> query($query_str) === TRUE) {
            print "information successfully entered.";
        } else {
            echo "error entering information: " . $mysqli_conn -> error;
        }		
	   
	require "footer.php";
	
	?>