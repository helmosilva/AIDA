<?php require "header.php"; ?>
<?php require "navbar.php"; ?>

    <div class="container">
      
     <?php
     
     $name = $_POST["uname"];
     $email = $_POST["email"];
     $subject = $_POST ["subject"];
     $message = $_POST["message"];
     
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
} else {
    echo "This ($email) email address is considered invalid.\n";
}
     
    //if "email" variable is filled out, send email
        if (isset($_REQUEST['email']))  {
  
          //Email information
          $admin_email = "info@saudafood.com";
          $name = $_REQUEST['uname'];
          $email = $_REQUEST['email'];
          $subject = $_REQUEST['subject'];
          $message = $_REQUEST['message'];
             
         //send email
			//mail($admin_email, $subject, $comment, "From:" . $email);
			
			mail($admin_email, $subject, $message, "from: " . $email);
		
		echo "<br>";
        echo "Hi " .$name . ", thank you for your message, we will contact you as soon as possible.";
            
        }
		
		?>
		
    </div> <!-- /container -->

<?php require "footer.php"; ?>
