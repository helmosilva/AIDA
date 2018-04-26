
<?php

			require "header.php";
			require "navbar.php";
			
        //delete data (delete green) and display
        
        $mysqli_conn -> query ("delete from cars where make= '$make'");
        Print "deleted row with make = citroen";
        $result = $mysqli_conn->query ("select * from cars");
        displayData ($result);
        
        //the function to display the data
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