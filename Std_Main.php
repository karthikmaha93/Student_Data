<?php

include 'DB_Connection.php';
echo "<style>

#students {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#students td, #students th {
  border: 1px solid #ddd;
  padding: 8px;
}

#students tr:nth-child(even){background-color: #f2f2f2;}

#students tr:hover {background-color: #ddd;}

#students th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0000ff;
  color: white;
}
</style><br><br><a href='http://localhost:8080/School_Base/add_record.php'>Add Record</a><br><br><br><table id='students'>
<tr>
    <th>RollNo</th>
    <th>Student Name</th>
    <th>Email ID</th>
    <th>Mobile Number</th>
    <th>Dept</th>
    <th>Subject</th>
    <th>Mark Obtain</th>
    <th>Result</th>
    <th>Grade</th>
    <th>Edit</th>
  </tr>";
$sql = "CALL get_student_details_view()";
$result = $conn->query($sql);
foreach ($result as $keyvalue) {
	$SID=$keyvalue['stdid'];
	$RID=$keyvalue['resid'];
	$RollNo=$keyvalue['student_roll_no'];
	$StdName=$keyvalue['student_name'];
	$Email=$keyvalue['student_email'];
	$Mobile=$keyvalue['student_mobile'];
	$Dept=$keyvalue['student_dept'];
	$Subject=$keyvalue['student_subject'];
	$MarkObtain=$keyvalue['student_mark_obtain'];
	$Result="";
	$Grade="";
	if($MarkObtain>=50)
	{
		$Result='PASS';
	}else{
		$Result='Fail';
	}
	if($MarkObtain>=90)
	{
		$Grade='S';
	}elseif($MarkObtain<=90 && $MarkObtain>=81)
	{
		$Grade='A+';
	}
	elseif($MarkObtain<=80 && $MarkObtain>=71)
	{
		$Grade='A';
	}
	elseif($MarkObtain<=70 && $MarkObtain>=61)
	{
		$Grade='B';
	}
	elseif($MarkObtain<=60 && $MarkObtain>=50)
	{
		$Grade='C';
	}

	else
	{
		$Grade='RA';
	}
	
	echo "<form action='Edit_Std.php' method='post'><tr>
	<input type='hidden' name='stdid' value='$SID'>
	<input type='hidden' name='resid' value='$RID'>
	<td name='Student' width='35%'><input type='hidden' name='td_1' value='$RollNo'>$RollNo</div></td>
    <td name='Student' width='35%'><input type='hidden' name='td_2' value='$StdName'>$StdName</td>
    <td name='Student' width='35%'><input type='hidden' name='td_3' value='$Email'>$Email</td>
    <td name='Student' width='35%'><input type='hidden' name='td_4' value='$Mobile'>$Mobile</td>
    <td name='Student' width='35%'><input type='hidden' name='td_5' value='$Dept'>$Dept</td>
    <td name='Student' width='35%'><input type='hidden' name='td_6' value='$Subject'>$Subject</td>
    <td name='Student' width='35%'><input type='hidden' name='td_7' value='$MarkObtain'>$MarkObtain</td>
    <td name='Student' width='35%'><input type='hidden' name='td_8' value='$Result'>$Result</td>
    <td name='Student' width='35%'><input type='hidden' name='td_9' value='$Grade'>$Grade</td>
    <td><input type='submit' name='submit' value='Edit_Send'></td>	
	</form>";

}
echo "</table><br>";



?>