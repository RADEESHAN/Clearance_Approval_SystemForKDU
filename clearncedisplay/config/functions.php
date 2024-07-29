<?php 

  require_once 'db.php';

  function dispaly_data(){
    global $con;
    $query = "select * from applyclearance";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>