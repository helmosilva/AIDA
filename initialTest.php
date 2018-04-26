<?php 

      require "header.php";
      require "navbar.php";
?>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Test: Initialisation and Configuration</h1>
        <br>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span12">
          <h2>Testing</h2>
          
  <?php 		
	    print  "Base URL = ". $config['base_url'];
	    print "<br />";
	    print "Database Details";
	    print "<pre>";
	    print_r($db);
	    print "</pre>";
	?>		
          
        </div>
        
        <hr>

      
<?php

    require "footer.php";
?>