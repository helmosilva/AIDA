
<?php

		require "header.php";
		require "navbar.php";
        
        //create table
        
        $tableCreate = "CREATE TABLE cars ( id int(11) NOT NULL auto_increment,
                        reg_num varchar(255) NOT NULL,
                        Make varchar(255) NOT NULL,
                        Model varchar(255),
                        reg_year date,
                        fuel_type varchar(255),
                        no_of_doors int(5),
                        PRIMARY KEY (id))";

        //drop table in case we wish to recreate the data as we manipulate it
        $query_str = "DROP TABLE IF EXISTS cars CASCADE";
        $mysqli_conn -> query($query_str);
        
        //inform user that table was created
        if ($mysqli_conn -> query($tableCreate) === TRUE) {
            print "Table 'cars' successfully created.";
        } else {
            echo "error creating table: " . $mysqli_conn -> error;
        }	
		
		
		require "footer.php";
?>
