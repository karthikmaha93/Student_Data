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
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

    <form action='add_DB.php' method='post'>
     RollNo: <input type='text' name='RollNo' required pattern='\S+'/>
     StdName: <input type='text' name='StdName' autocomplete='on'>
     EMail: <input type='text' name='Mail'autocomplete='on' autocomplete='on'>
     MobileNo: <input type='text' name='MobileNo' autocomplete='on'>
     Dept: <input type='text' name='Dept' autocomplete='on'>
     Subject: <input type='text' name='Subject' required pattern='\S+'/>
     Mark Optain: <input type='text' name='Mark Optain' required pattern='\S+'/>
     <input type='submit' value='Save'>
    </form>";

?>