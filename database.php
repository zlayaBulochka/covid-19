<?php
$link = mysqli_connect('localhost:3308', 'server', 'server', 'pig');
    if (!$link) {
          die("Connection failed: " . mysqli_connect_error());
    }
?>