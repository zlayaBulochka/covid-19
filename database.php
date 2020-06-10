<?php
$link = mysqli_connect('localhost', 'server', 'server', 'pig');
    if (!$link) {
          die("Connection failed: " . mysqli_connect_error());
    }
?>