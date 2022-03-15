<?php
    $servername = "db5006937809.hosting-data.io";
    $database = "dbs5727918";
    $username = "dbu96374";
    $password = "admin@tumamalachupa69";
    // Create connection
    $link = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$link) {
          die("Connection failed: " . mysqli_connect_error());
    }
?>