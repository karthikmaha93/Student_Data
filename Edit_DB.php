<?php

include 'DB_Connection.php';
  $RollNo=$_POST['RollNo'];
  $Subject=$_POST['Subject'];
  $MarkObtain=$_POST['MarkObtain'];
  $STDID=$_POST['STDID'];
  $RESID=$_POST['RESID'];

  $sql = "CALL update_tudent_details('".$RollNo."','".$Subject."','".$MarkObtain."','".$STDID."','".$RESID."')";
          if ($conn->query($sql) === TRUE) {
            echo "<p>Record Updated Success.</p>";
          } else {
            echo "Error updating record: " . $conn->error;
          }
  
  header("Location: http://localhost:8080/School_Base/Std_Main.php");


?>