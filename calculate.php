<?php  

if ($_POST['firstNumber'] == '' || $_POST['secondNumber'] == '')
{
  echo "Fields are required";
}
else {
  $firstNumber = $_POST['firstNumber'];
  $secondNumber = $_POST['secondNumber'];

  echo $firstNumber + $secondNumber;
}
