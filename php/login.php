<?php
if (isset($_POST["submit"]))
{
  $username = $_POST["username"];
  $userpasscode = $_POST["passcode"];
  echo $username . $userpasscode;
  // database variables setup
  $dbhost = "localhost";
  $dbuser = "admin";
  $dbpassword = "mysql";
  $dbschema = "users";
  $connection = new mysqli($dbhost,$dbuser,$dbpassword,$dbschema);
  if ($connection->errno) {
    die("could not connect :" . $connection->error);
  }
  $queryString = "SELECT * FROM user";
  $result = $connection->query($queryString);
  session_start();
  if (mysqli_num_rows($result)>0)
  {
    while ($row = $result->fetch_assoc())
    {
      $_SESSION['UserID'] = $row['UserID'];
      $_SESSION['username'] =$row['Username'];
      $_SESSION['usertype'] = $row['UserType'];
      $_SESSION['error'] =" ";
      header("Location:../mainPage.php");
    }
  }else{
    $_SESSION['error'] = "Username and password does not match our records"
            . "Please try again";
    header("Location:../index.php");
  }
} else {
  header("location:../index.html");
}
 exit();
