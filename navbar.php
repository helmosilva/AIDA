    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">AIDA A</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="cars.php">Showroom</a></li>
              <?php
              if ((isset($_SESSION['AdminUser']))) {
                    
                    echo "<li><a href= 'admin.php'>Admin</a></li>";
              } ?>
            </ul>
            <?php
            
            session_start();
            
                if ((isset($_SESSION['user']))) {
                    
                    echo "<div class='pull-right'>
                    <font color='#FFFFFF'>Welcome <a href='customerpage.php'> " . $_SESSION ['user'] . "</font></a>
                    <a href='logout.php' class= 'btn'>logout</a>
                    </div>";
                } elseif ((isset($_SESSION['AdminUser']))) {
                    
                    echo "<div class='pull-right'>
                    <font color='#FFFFFF'> Welcome <a href='customerpage.php'>" . $_SESSION ['AdminUser'] . "</font>
                    <a href='logout.php' class= 'btn'>logout</a>
                    </div>";
                } else { 
                    echo "<form class='navbar-form pull-right' method='GET' action='./loginsubmit.php' >
                    <input class='span2' type='text' name= 'email' placeholder='Email' required>
                    <input class='span2' type='password' name= 'password' placeholder='Password' required>
                    <button class='btn' type='submit' name ='submit'> sign in </button>
    			    <a href='register.php' class= 'btn'>Register</a>
                        </form>";
                }
            ?>
			
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>