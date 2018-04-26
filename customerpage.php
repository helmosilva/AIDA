<?php 

      require "header.php";
      require "navbar.php";
?>




    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <?php 
        
        if ((isset($_SESSION['user'])) || (isset($_SESSION['AdminUser']))) {
            
            echo "<h1>" . $_SESSION ['user'] . "</h1>";
            echo "<h1>" .  $_SESSION ['AdminUser'] . "</h1>";
        }
        ?>
        <br>
        <p>This is is your personal page.<br> You will be able to make amends to your email and change your name.</p>
      </div>
        
        <div class="row">
            
            <div class="span6">
                
            	<table border="3" >
            		<tr>
            			<th>Name</th>
            			<th>Email</th>
            		</tr>
            		<?php
            		
                		session_start();
                		
                		$cust_name = $_SESSION ['user'];
                		$admin_name = $_SESSION['AdminUser'];
                		
                		
                		$query = "SELECT * FROM AIDA_account WHERE name = '$cust_name'" ;
                		$query1 = "SELECT * FROM AIDA_account WHERE name = '$admin_name'" ;

                        $result = mysqli_query($mysqli_conn,$query);
		                $result1 = mysqli_query($mysqli_conn,$query1);
		                
                			
                		while($row = mysqli_fetch_assoc($result))
                			{   
                				echo "<tr><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td></tr>";
                			}
                
                	?>
                </table>
            </div>
            
            <div class="span6">
                <h3>Update your account</h3>
        <form action="cust_update.php" method="post">
            <input type="text" placeholder="Name" name="name" required /><br>
            <input type="email" placeholder="Email" name="email" required /><br>
            <input type="submit" name="update" value= "update" class="btn" />
        </form>
            </div>
        </div>
        
            <div class="span12"></div>
            
    </div>

      <hr>

<?php

    require "footer.php";
?>