<?php
   require_once 'database.php';
   if (!isset($_COOKIE['cookie_token'])) {
        header("Location: http://localhost/laba2/login.php"); 
        die();
   }
   $token=$_COOKIE['cookie_token'];
   $query="SELECT login FROM users WHERE token = '$token'";
   $result=mysqli_query($link, $query);
   $user=mysqli_fetch_row($result);
   $user=$user[0];
   $create_time=$_COOKIE['cookie_create_time'];
   $re_time=time()-$create_time;
   if ($re_time > 3600) {
        $token=bin2hex(random_bytes(32));
        $query="UPDATE users SET token = '$token' WHERE login = '$user'";
        $result=mysqli_query($link, $query);
        setcookie('cookie_create_time', time());
        setcookie('cookie_token', $token);
   }
   $query="SELECT status FROM games WHERE user1='$user' OR user2='$user'";
   $result=mysqli_query($link, $query);
   $status=mysqli_fetch_row($result);
   if ($status[0]==1 OR $status[0]==2) {
        $query="UPDATE games SET status = 4 WHERE user1 = '$user'";
        $result=mysqli_query($link, $query);
        $query="UPDATE games SET status = 3 WHERE user2 = '$user'";
        $result=mysqli_query($link, $query);
        $query="SELECT games FROM players WHERE login = '$user'";
        $result=mysqli_query($link, $query);
        $games=mysqli_fetch_row($result);
        $games=$games[0];
        $query="SELECT wins FROM players WHERE login = '$user'";
        $result=mysqli_query($link, $query);
        $wins=mysqli_fetch_row($result);
        $wins=$wins[0];
        if ($games!=0){
             if ($wins!=0){
                $winrate=round(($wins[0]/$games[0])*100);
                $coef=$winrate;
             }
             else {
                $coef=50;
             }
        }
        else {
             $coef=100;
        }
        $query="UPDATE players SET rating = rating - '$coef' WHERE login = '$user'";
        $result=mysqli_query($link, $query);
        $query="UPDATE players SET games = games + 1 WHERE login = '$user'";
        $result=mysqli_query($link, $query);
        $query="UPDATE players SET loses = loses + 1 WHERE login = '$user'";
        $result=mysqli_query($link, $query);
   }
   else {
        $query="DELETE FROM games WHERE user1 = '$user' OR user2 = '$user'";
        $result=mysqli_query($link, $query);
   }
   $query="SELECT login FROM players";
   $result=mysqli_query($link, $query);
   for ($i=0; $i<mysqli_num_rows($result); ++$i){
       $acc = mysqli_fetch_row($result);
       if($user==$acc[0]){
           goto exist;
       }
   }
   $query = "INSERT INTO players (login) VALUE ('$user')";
   $result=mysqli_query($link, $query);
exist:
   $query = "UPDATE players SET time = NULL WHERE login = '$user'";
   $result=mysqli_query($link, $query);
   mysqli_close($link);
   setcookie('cookie_time', 0);
?>
<!doctype html>

           <html lang="en">
             <title> Hello! </title>
             <head>
               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-D/7uAka7uwterkSxa2LwZR7RJqH2X6jfmhkJ0vFPGUtPyBMF2WMq9S+f9Ik5jJu1" crossorigin="anonymous">
             </head>
                 <style>
                 body {
            background-image: url(https://getbg.net/upload/full/www.GetBg.net_2017Creative_Wallpaper_Two_white_dice_113042_.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-size: 200%;
            position: fixed;
                   
                    top: 30%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                 }
                 </style>
             <body>
                <form method="post" action="wait.php">
                <div1>
                  <h3 class="alert alert-warning">
                <a href="http://localhost/laba2/RateTable.php"> See the RateTable </a>
                </h3>
                </div1>
                <div align="center">
                <br>
                <h1>
                <?php
                     print "Hello, $user!";
                ?>
                </h1> <br>
                <input type="submit" class="btn btn-success" value="PLAY"> <br>
                <h3 class="alert alert-warning"> 
                <br> <a href="http://localhost/laba2/auth.php"> Log out </a>
                 </h3>
                </div>
                </form>
              </body>
           </html>

