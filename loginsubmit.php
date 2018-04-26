<?php
	
	session_start();
	require './config/init.php';
	
	
	//if Data has been submitted to this page collect it
	if(isset($_GET['submit']))
	{
		$email = $_GET['email'];
		$pass = $_GET['password'];
     
		

		//build and run query to see if user details entered match any in user tble
		$query = "SELECT * FROM AIDA_account WHERE email = '$email' AND password = '".md5($pass)." '";
		$query1 = "SELECT * FROM AIDA_account WHERE email = 'helmobenfica@hotmail.com' AND password= '".md5($pass)." '";
	
	
		$result = mysqli_query($mysqli_conn,$query);
		$result1 = mysqli_query($mysqli_conn,$query1);
		
		//is there a matching record?
		if($row = mysqli_fetch_assoc($result1)){
		    
		    $_SESSION['AdminUser'] = $row['name'];
		    
		    require "header.php";
		    require "navbar.php";
		    echo "<div class='container'>
			        <div class='hero-unit'>
		    <h2>Welcome Admin " . $_SESSION ['AdminUser'] . "</h2>  ";
			echo "<br>";
			echo "</div>
			        </div>";
			require "footer.php";
		
		} elseif($row = mysqli_fetch_assoc($result)){
		    
			//matching record found save user and message and user to sending page
			$_SESSION['user'] = $row['name'];
			
			require "header.php";
		    require "navbar.php";
			echo "<div class='container'>
			        <div class='hero-unit'>
			<h2>Welcome " . $_SESSION ['user'] . "</h2>  
			<br>
			        </div>
			      </div>";
            require "footer.php";
            
			//refer to index page
			 header('Location: index.php');
		}
		else
		{
			//no matching record return to fail message to sending page
			echo "failed to login. <a href= 'index.php'> return to main page</a>";
			header ('Location: register.php');
		}
	}
	else 
	{
		echo "login failed!!!";
		header ('Location: register.php');
	}
	
?>