<?php

  include 'DB_Connection.php';
  $RollNo=$_POST['RollNo'];
  $StdName=$_POST['StdName'];
  $Email=$_POST['Mail'];
  $Mobile=$_POST['MobileNo'];
  $Dept=$_POST['Dept'];
  $Subject=$_POST['Subject'];
  $MarkObtain=$_POST['Mark_Optain'];


  $sql = "CALL insert_std_records('".$RollNo."','".$StdName."','".$Email."','".$Mobile."','".$Dept."','".$Subject."','".$Mark_Optain."')";
          if ($conn->query($sql) === TRUE) {
            echo "<p>Record insert Success.</p>";
          } else {
            echo "Error insert record: " . $conn->error;
          }
  
  header("Location: http://localhost:8080/School_Base/Std_Main.php");


?>