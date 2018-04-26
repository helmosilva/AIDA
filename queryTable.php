
<?php
        
			require "header.php";
			require "navbar.php";
		
		require "./config/config.php";
        require "./config/init.php";
        
        //update data (set all passwords to secret) and display
        $query = $mysqli_conn->query("SELECT * FROM cars");
        displayData ($query);
		
        //the fuction to display the data
        function displayData ($query) {
            Print "<table border = 1>";
                while ($row = $query->fetch_assoc()){
                    Print " <tr>";
                    Print "     <td>" . $row["id"] . "</td>";
                    Print "     <td>" . $row["reg_num"] . "<td>";
                    Print "     <td>" . $row["Make"] . "<td>";
                    Print "     <td>" . $row["Model"] . "<td>";
                    Print "     <td>" . $row["reg_year"] . "<td>";
                    Print "     <td>" . $row["fuel_type"] . "<td>";
                    Print "     <td>" . $row["no_of_doors"] . "<td>";
                    Print " <tr>";
                }
            print "</table>";
        }
		
require "footer.php";
		
		?>
