<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TestingSever1@mikelees17.com</title>
        <script src="./js/jquery-3.1.1.js"></script>
        <script src="./js/resources.js"></script>
        <script>
        $(document).ready(function ()
        {
          clockRender();
          get_task_list();
        });
        function clockRender()
        {
          $("#dateandTime").html(dateandtimeLoader("T"));
          setTimeout(clockRender,1000);
        }
        function get_task_list()
        {
          $.post("./php/task_ajax.php",
            {
              operation:"getTasks"
            },
            function(data)
            {
              var taskList = $.parseJSON(data);
              for (var task in taskList) {
                var li ="<li> " + taskList[task].task + "</li>";
                $("#task").append(li);
              }
            }
          );
        }
        </script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="./css/main.css"/>
    </head>
    <body style="background-color:orange">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Contact Us</a></li>
              </ul>
          </div>
      </nav>
      <div class="container">
          <div class="row">
            <div class="col-sm-3" id="left">
              <?php session_start();
                echo "<h1> Welcome " . $_SESSION['username']."</h1><br/>";
              ?>
            </div>
              <div class="col-sm-3">
                <button class="btn bt-primary"style="width:100px;height:100px;"></button>
                <!-- <img src="./resources/owncloud6.png" style="width:100px;height:100px;"/><br/> -->
                <h3>Owncloud</h3>
              </div>
              <div class="col-sm-3 clock">
                <h1>Digital Clock</h1>
                &nbsp;&nbsp;<h3 id="dateandTime"></h3>
              </div>
              <div class="col-sm-1">&nbsp;</div>
              <div class="col-sm-2">
                <ul id="task"> </ul>
              </div>
          </div>
        </div>
    </body>
</html>
