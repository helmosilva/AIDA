 <?php 
 
        include ("header.php");
        include ("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> j query</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  </head>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

<body>
  <h2> CARS:</h2>
<div id="accordion">
  <h3>citroen:</h3>
  <div>
    <p>
   2002-03-07
    </p>
  </div>
  <h3>vauxhall:</h3>
  <div>
    <p>
   2-07-2007
    </p>
  </div>
  <h3>kia:</h3>
  <div>
    <p>
 3-2-2009
    </p>
  </div>
</div>


</body>
</html>
