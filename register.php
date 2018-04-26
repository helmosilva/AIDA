<?php

require './config/init.php';

if (isset($_GET['register'])) {
    
    $name = mysqli_real_escape_string($mysqli_conn, $_GET['name']);
    $email = mysqli_real_escape_string($mysqli_conn, $_GET['email']);
    $password = mysqli_real_escape_string($mysqli_conn, $_GET['password']);
    $password2 = mysqli_real_escape_string($mysqli_conn, $_GET['cpassword']);
    
        if ($password == $password2) {
            
            $confirm_code = rand();
            
            $query1 = "INSERT INTO AIDA_account (name, email, password,confirmed,code) VALUES
	        ('$name', '$email', '".md5($password)."', '0','$confirm_code')";
	        $result = mysqli_query ($mysqli_conn, $query1);
        
            if($result = 1) {
            
                
                
               echo "Successfully Registered!";
                
                
                if (isset($_REQUEST['email'])) {
                    
                    //email info
                    $admin_email = "info@saudafood.com";
                    $subject = "Welcome to Saudafood";
                    $msg = "";
                    
                    // the message
                    $msg = "Welcome " .$name . "! Thank you for registering with us and may it be the begining of a wonderful adventure.\n
                            Please confirm your email. Click the link below to confirm your account.\n
                            
                            your password is: ".$password . " .\n\nRegards\nHelmo Silva (saudafood)";
                    
                    // use wordwrap() if lines are longer than 70 characters
                    $msg = wordwrap($msg,150);
                    
                    // send email
                    mail($email, $subject, $msg, "from: ". $admin_email);
                    
                    header("Location:'index.php'");
                }
            } else {
               echo "Error in registering...Please try again later!";
            }    
            
        } else {
            
            echo "Your passwords don't match!";
        }
}
    
?>
<?php 

require "header.php";
require "navbar.php";

?>

<div class= "container">
    <div class="span6">
        <h1>Create an account</h1>
        <form class="navbar-form" action="register.php" method="get">
            <input type="text" placeholder="Name" name="name" required /><br>
            <input type="email" placeholder="Email" name="email" required /><br>
            <input type="password" placeholder="Password" name="password" required /><br>
            <input type="password" placeholder="Confirm Password" name="cpassword" required /><br>
            <input type="submit" name="register" value= "Register" class="btn btn-primary" />
        </form>
      </div>
</div>
<br>
<hr>

<?php

require "footer.php";
?>