<?php

echo "<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #0000ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0000ff;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
";

include 'DB_Connection.php';
	
	$RollNo=$_POST['td_1'];
	$StdName=$_POST['td_2'];
	$Email=$_POST['td_3'];
	$Mobile=$_POST['td_4'];
	$Dept=$_POST['td_5'];
	$Subject=$_POST['td_6'];
	$MarkObtain=$_POST['td_7'];
	$STDID=$_POST['stdid'];
	$RESID=$_POST['resid'];
	
	echo "<div><form method='post' action='Edit_DB.php'>
	<input type='hidden' name='STDID' value=$STDID>
	<input type='hidden' name='RESID' value=$RESID>
	  RollNo: <input type='text' name='RollNo' value=$RollNo required pattern='\S+'/>
	  <input type='hidden' name='StdName' value=$StdName>
	  <input type='hidden' name='Email' value=$Email>
	  <input type='hidden' name='Mobile' value=$Mobile>
	  <input type='hidden' name='Dept' value=$Dept>
	  Subject: <input type='text' name='Subject' value=$Subject required pattern='\S+'/>
	  MarkObtain: <input type='text' name='MarkObtain' value=$MarkObtain required pattern='\S+'/>
	  <input type='submit' name='submit' value='Edit_Std'><script></script>
	</form></div>";


?>