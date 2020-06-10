 <?php
   if (isset($_COOKIE['cookie_token'])) {
        header("Location: index.php");
        die();
    }
 ?>
   <!doctype html>
           <html lang="en">
              <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-D/7uAka7uwterkSxa2LwZR7RJqH2X6jfmhkJ0vFPGUtPyBMF2WMq9S+f9Ik5jJu1" crossorigin="anonymous">
                <title>Authorization</title>
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
                <h1 align = "center" class="alert alert-success">Authorization</h1>
                     <form method="post" action="auth.php">
                        <div align = "center">
                        <h4 class="alert alert-danger">The password is wrong</h4>
                        <table>
                        <tr>
                            <td> <label for="loginField">Login</label>   </td>
                            <td> <input id="loginField" type="text" name="login" size="30" autocomplete="off" required> </td>
                        </tr>
                        <tr>
                            <td> <label for="passField"> Password </label>   </td>
                            <td> <input id="passField" type="password" name="pswrd" size="30" required> </td>
                        </tr>
                       </table>
                         <input type="submit" class="btn btn-success" value="login"> <br>
                         <a href="signup.php"> Sign up </a>
                       </div>
                    </form>
             </body>
           </html>

