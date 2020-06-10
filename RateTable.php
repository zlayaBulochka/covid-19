<?php
    require_once 'database.php';
    $token=$_COOKIE['cookie_token'];
    $query="SELECT login FROM users WHERE token = '$token'";
    $result=mysqli_query($link, $query);
    $user=mysqli_fetch_row($result);
    $user=$user[0];
    $query="SELECT login, rating, games, wins, loses FROM players ORDER BY rating DESC";
    $result=mysqli_query($link, $query);
    $rows=mysqli_num_rows($result);
    $table='';
?>
<!doctype html>
           <html lang="en">
           <title>RateTable</title>
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
                <form method="post" action="index.php">
                <div align="center"> <br>
                <h1 class="alert alert-success">
                <th>RateTable</th>
                </h1>
                    <h2>
                    <table border=1>
                        <tr align=center>
                            <td> Place </td>
                            <td> Login </td>
                            <td> Rating </td>
                            <td> Games </td>
                            <td> Wins </td>
                            <td> Loses </td>
                        </tr>
                            <?php
                               $query="SELECT login, rating, games, wins, loses FROM players ORDER BY rating DESC";
                               $result=mysqli_query($link, $query);
                               for ($tr=0; $tr<$rows; $tr++){
                                   $r=mysqli_fetch_row($result);
                                   if ($r[0]==$user){
                                       $table .= '<tr align=center style="color:white;background-color:red;">';
                                   }
                                   else {
                                       $table .= '<tr align=center>';
                                   }
                                   $table .= '<td>'.($tr+1).'</td>';
                                   for ($col=0; $col<5; $col++){
                                       $table .= '<td>'.$r[$col].'</td>';
                                   }
                                   $table .= '</tr>';
                               }
                               echo $table;
                               mysqli_close($link);
                            ?>
                        </tr>
                   </table>
                   </h2>
                <input type="submit" class="btn btn-success" value="Back"> <br>
                </div>
                </form>
             </body>
</html>