<?php

if ($_POST['firstNumber'] == '' || $_POST['secondNumber'] == '') {
  echo "Fields are required";
} else {
  $firstNumber = $_POST['firstNumber'];
  $secondNumber = $_POST['secondNumber'];

  $operator = $_POST['operator'];
  if ($operator == 'addition') {
    $sum = $firstNumber + $secondNumber;
    echo "The sum of $firstNumber and $secondNumber is $sum";
  } 
}
