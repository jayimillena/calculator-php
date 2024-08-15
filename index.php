<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>

<body>
  <form action="calculate.php" method="POST">
    <label for="firstNumber">First number</label>
    <input type="text" name="firstNumber" placeholder="Enter first number" />
    <label for="secondNumber">Second number</label>
    <input type="text" name="secondNumber" placeholder="Enter second number" />
    <select name="operator">
      <option value="addition">+</option>
      <option value="subtraction">-</option>
      <option value="multiplication">*</option>
      <option value="division">/</option>
    </select>
    <input type="submit" name="add" value="Calculate">
  </form>
</body>

</html>