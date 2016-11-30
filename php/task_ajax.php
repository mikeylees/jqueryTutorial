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
}

?>
