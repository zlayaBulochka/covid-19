<?php
$link = mysqli_connect('localhost:3308', 'root', '', 'database');
    if (!$link) {
          die("Connection failed: " . mysqli_connect_error());
    }
?>