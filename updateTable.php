
<?php
        
			require "header.php";
			require "navbar.php";
        
        //update data (set all passwords to secret) and display
        $mysqli_conn -> query ("update cars set reg_year = 'secret'");
        Print "changing reg_year to 'secret'; <br> - Affected rows (update): = ";
        Print $mysqli_conn->affected_rows;
        $result = $mysqli_conn->query("SELECT * FROM cars");
        displayData ($result);
		
        //the fuction to display the data
        function displayData ($result) {
            Print "<table border = 1>";
                while ($row = $result->fetch_assoc()){
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
