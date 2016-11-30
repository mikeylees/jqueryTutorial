<?php
function getconnection(){
  $dbhost = "localhost";
  $dbuser = "admin";
  $dbpassword = "mysql";
  $dbschema = "tasksApp";
  $datalink = new mysqli($dbhost,$dbuser,$dbpassword,$dbschema);
  return $datalink;

}
$operation = $_POST['operation'];
if (isset($operation))
{
// -------------------[get a lists of task]----------------------------------
  if ($operation == "getTasks")
  {
    $conn = getconnection();
      if (!$conn->errno)
      {
        $queryString = "Select * from tasks";
        $result = $conn->query($queryString);
        $rslist = array();
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_object()) {
            array_push($rslist,$row);
          }
          echo json_encode($rslist);
        }
      }
    }
//------------------------[end of procedure]------------------------------------
//------------------------[get task procedure]----------------------------------
  if ($operation == "getTask")
  {
    //grab the id
    $id = $_POST['id'];
    $connection = getconnection();
    if(!$connection->errno)
    {
      echo "get connection";
      $queryString="Select * from task where taskid='" . $id . "'";
      echo $queryString;
      $result = $connection->query($queryString);
      echo "<br/> rows return:" . $result->num_rows;
      if($result->num_rows > 0)
      {
        while ($row = $result->fetch_object()) {
          echo json_encode($row);
        }

      }
    }
  }
//---------------------------[end of procedure ]--------------------------------
}

?>
