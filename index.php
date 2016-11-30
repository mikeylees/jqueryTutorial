<?php
session_start();
if(!isset($_SESSION['error']))
{
  $_SESSION['error']=" ";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TestingSever1@mikelees17.com</title>
        <script src="./js/jquery-3.1.1.js"></script>
        <script src="./js/resources.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script>

            $(document).ready(function()
            {

                $("#timeLoaded").html("Page loaded: " + dateandtimeLoader("R"));
            });
        </script>
    </head>
    <body style="background-color: orange;">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    &nbsp;
                </div>
                <div class="col-sm-6">
                  <div class="jumbotron">
                    <h3>Login Form</h3>
                    <form action="./php/login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" placeholder="username" class="form-control" id="username"/>
                        </div>
                        <div class="form-group">
                            <label for="passcode">Password</label>
                            <input type="password" name="passcode" placeholder="password" class="form-control" id="passcode"/>
                        </div>
                        <input type="submit" class="btn btn-default" name="submit" value="Login">
                    </form>
                    <span id="timeLoaded"></span>
                </div>
                </div>
                <div class="col-sm-3" id="errorLog">
                    <?php
                      echo $_SESSION['error'];
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
