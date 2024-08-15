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
  } else if ($operator == 'subtraction') {
    $difference = $firstNumber - $secondNumber;
    echo "The difference of $firstNumber and $secondNumber is $difference";
  } else if ($operator == 'multiplication') {
    $product = $firstNumber * $secondNumber;
    echo "The product of $firstNumber and $secondNumber is $product";
  } else if ($operator == 'division') {
    if ($secondNumber == 0) {
      echo "Undefined";
    } else {
      $quotient = $firstNumber * $secondNumber;
      echo "The quotient of $firstNumber and $secondNumber is $quotient";
    }
    
  }
}
