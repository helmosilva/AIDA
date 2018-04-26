<?php 
    
    session_start();
    
    if(isset($_SESSION['AdminUser'])) {
        
        //Make connection to database
        require './config/init.php';
                
        require "header.php";
        require "navbar.php";
        
      
        echo "<div class='container'>";

      //Main hero unit for a primary marketing message or call to action
       echo "<div class='hero-unit'>
        <h1>Hello " . $_SESSION['AdminUser'] ." </h1>
        <p>Insert new car credetials.</p>
        <form method = 'post' action = 'admin.php'>
                        car Image: <input type = 'text' name = 'carImage' placeholder='insert directory of image' required/>
                        <br>
                        Make: <input type = 'text' name = 'Make' placeholder='Car Make' required/>
                        <br>
                        Model: <input type = 'text' name = 'Model' placeholder='Car Model' required/>
                        <br>
                        Reg Number: <input type = 'text' name = 'reg_num' placeholder='Registration Number' required/>
                        <br>
                        year: <input type = 'text' id='datepicker' name = 'year' required/>
                        <br>
                        Fuel: <input type = 'text' name = 'fuel_type' placeholder='Enter fuel type' required/>
                        <br>
                        No of doors: <input type = 'text' name = 'no_of_doors' placeholder='Number of doors' required/>
                        <br>
                        <input type = 'submit' value = 'submit' name = 'add' />
        </form>";
        
                
                //(a)Gather from $_POST[]all the data submitted and store in variables
                    if (isset($_POST['add'])){
                        $image = $_POST['carImage'];
                        $make = $_POST['Make'];
                        $model = $_POST['Model'];
                        $reg_num = preg_replace("#[^a-z]#i","#[^A-Z]#i",($_POST['reg_num']));
                        $year = $_POST['year'];
                        $fuel = $_POST['fuel_type'];
                        $doors = $_POST['no_of_doors'];
                        
                                 
                                    $query = "INSERT INTO cars (reg_num, Make, Model, reg_year, fuel_type, no_of_doors, carImage)
                                                VALUES
                                            ('$reg_num', '$make', '$model', '$year', '$fuel', '$doors', '$image')";
                                            
                                    echo "New record inserted <br>";
                                    mysqli_query($mysqli_conn, $query);
                   }
                
                echo "<br>
      </div>";

      //Example row of columns
       echo "<div class='row'>
        <div class='span12'>
          <h2>Display all cars</h2>";
          
           //display all records in the user table
				$query="SELECT * FROM cars ";
				
				//run query and save result
				$result=mysqli_query($mysqli_conn, $query);
    
	            //loop through array and store each row in the variable $row
				while ($row=mysqli_fetch_assoc($result)){
				    //echo out each record
				    echo "<div class='span2'>" . 
					'<br>' .
					'<img src="assets/img/' . $row['carImage'] . '"  />' .
					"<p><strong>Make:</strong> " . $row['Make'] ."</p>" .
					"<p><strong>Model:</strong> " . $row['Model'] ."</p>" .
					"<p><strong>Reg Number:</strong> " . $row['reg_num'] ."</p>" .
					"<p><strong>Fuel Type:</strong> " . $row['fuel_type'] ."</p>" .
					"<p><strong>No of Doors:</strong> " . $row['no_of_doors'] ."</p>" .
				    '</div>';
					}
					
                if(isset($_POST['search'])) {
                    
                    $make = $_POST['make'];
                    $model = $_POST['model'];
                    $make = preg_replace("#[^0-9a-z]#i","",$make);
                    $model = preg_replace("#[^0-9a-z]#i","",$model);
                    
                    
                    $query  = mysql_query("SELECT * FROM cars WHERE make LIKE '%$make%' OR model LIKE '%$model%'");
                    
                    $count = mysql_num_rows($query);
                    
                    if($count == 0) {
                        
                        echo 'No results available';
                        
                    }else {
                        while($row = mysql_fetch_array($query)) {
                            
                            $Make = $row['make'];
                            $Model = $row['model'];
                            $carImg = $row['carImage'];
                            $reg_num = $row['reg_num'];
                            $fuel = $row['fuel_type'];
                            $doors = $row['no_of_doors'];
                            
                            echo "<div class='span2'>" . 
        					'<br>' .
        					'<img src="assets/img/' . $row['carImage'] . '"  />' .
        					"<p><strong>Make:</strong> " . $row['Make'] ."</p>" .
        					"<p><strong>Model:</strong> " . $row['Model'] ."</p>" .
        					"<p><strong>Registration Number:</strong> " . $row['reg_num'] ."</p>" .
        					"<p><strong>Fuel Type:</strong> " . $row['fuel_type'] ."</p>" .
        					"<p><strong>No of Doors:</strong> " . $row['no_of_doors'] ."</p>" .
        				    '</div>';
                            
                            
                        }
                    }
                    
                }
                
            echo "</div>
        
         <div class='span12'>
            <h2>Display all users</h2>
             
             	<table border='3' >
            		<tr>
            			<th>Name</th>
            			<th>Email</th>
            			<th>Action</th>
            		</tr>";
            		
                		
                		$query = "SELECT * FROM AIDA_account";

                        $result = mysqli_query($mysqli_conn,$query);

		                
                			
                		while($row = mysqli_fetch_assoc($result))
                			{   
                				echo "<tr><td>" . $row['name'] . "</td>
                				         <td>" . $row['email'] . "</td>
                				         <td><form action= 'deleteobj.php' method='post'><input type='submit' name='delete' value= 'delete' class='btn' /></td></form></tr>";
                			}
                			
                
            echo "</table>
            </div>
            <hr>";
            
            require "footer.php";
                
    }else{
        
        header('location:index.php');
    }
      
?>
