<?php
$link = mysqli_connect('localhost:3308', 'root', '', 'pig');
    if (!$link) {
          die("Connection failed: " . mysqli_connect_error());
    }
?>