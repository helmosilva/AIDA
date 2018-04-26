<?php 

    require 'header.php';
    require 'navbar.php';
    
?>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        
            
            <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="assets/img/tesla1.jpg"  alt="" >
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="assets/img/mercedes-aclass1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="assets/img/gle1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="assets/img/rangerover1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="assets/img/Lamborghini_GPS.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
            </div>
            
            <div class="span12">

            <form action="cars.php" method="get">
                Make:
                <input type="text" name="Make" placeholder="Make">
                Model:
                <input type="text" name="Model" placeholder="Model">
                <input type="submit" value="search" class= "btn">
            </form>
            
        </div>
        <div class="span12"></div>
       </div>
       
      <!-- Example row of columns -->
        <div class="row">
            
            <?php 
            
            require "./config/init.php";
					
                if(isset($_GET['search'])) {
                    
                    $make = $_GET['make'];
                    $model = $_GET['model'];
                    $make1 = preg_replace("#[^0-9a-z]#i","",$make);
                    $model1 = preg_replace("#[^0-9a-z]#i","",$model);
                    
                    
                    $query  = mysql_query("SELECT * FROM cars WHERE make LIKE '%$make1%' OR model LIKE '%$model1%'");
                    
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
                            
                            echo "<div class='span2'>
        					<br>
        					<img src='assets/img/'" . $row['carImage'] . "'  />
        					<p><strong>Make:</strong> '" . $row['Make'] ."'</p>
        					<p><strong>Model:</strong> '" . $row['Model'] ."'</p>
        					<p><strong>Registration Number:</strong> '" . $row['reg_num'] ."'</p>
        					<p><strong>Fuel Type:</strong> '" . $row['fuel_type'] ."'</p>
        					<p><strong>No of Doors:</strong> '" . $row['no_of_doors'] ."'</p>
        				    </div>";
                            
                            
                        }
                    }
                    
                    
                    
                } else {
                    
                
                //display all records in the user table
				$query2="SELECT * FROM cars ";
				
				//run query and save result
				$result=mysqli_query($mysqli_conn, $query2);
    
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
                }


?>
        
        </div>
    </div>
    
<?php

    require "footer.php";
?>










