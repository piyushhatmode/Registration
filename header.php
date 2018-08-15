<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Index</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="main-wrapper">
          <ul>
            <li>
              <a href="index.php">Home</a>
            </li>
              </ul>
            <div class="nav-login">
              <?php
                if(isset($_SESSION['u_id'])){
                    echo '<form action="logout.inc.php" method="post">
                       <button type="submit" name="submit">Logout</button>
                     </form>';

                }else{
                  echo '<form action="includes/login.inc.php" method="post">
                      <input type="text" name="uid" placeholder="Username/email"value="">
                      <input type="password" name="pwd" placeholder="password" value="">
                      <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>';
                }

               ?>


            </div>

        </div>
      </nav>
    </header>
