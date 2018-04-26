<?php 

      require "header.php";
      require "navbar.php";
?>




    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Database test</h1>
        <br>
        <p>This is a informational website.<br> It will be used as a starting point to create something more unique.</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>1. OO MySQLi methods to interact with your data</h2>
      <ul>
        <li><a href="createTable.php">Create Table</a></li>
        <li><a href="insertTable.php">Insert Table</a></li>
        <li><a href="queryTable.php">Query Table</a></li>
        <li><a href="updateTable.php">Update Table</a></li>
        <li><a href="deleteRecord.php">Delete records</a></li>
      </ul>
        </div>
        <div class="span4">
          <h2>2. PDO - PHP Data Objects</h2>
          
      <ul>
        <li>Create Table PDO</li>
        <li>Insert Table PDO</li>
        <li>Display Table PDO</li>
      </ul>
        </div>
        <div class="span4">
          <h2>3. Objects and Collection</h2>
      
      <ul>
        <li>Display Details of Books</li>
        <li>Public Object Class - Use LineItem.php but called by InstatiateLineItem</li>
        <li>Private Object Class</li>
        <li>ObjectCollection.php A collection of objects - private</li>
        <li>testClasses.php A collection of objects - public</li>
      </ul>
       </div>
      <hr>

      
<?php

    require "footer.php";
?>