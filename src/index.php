<?php

$products = array("Mobile", "Laptop", "Tablet", "Camera");

echo "<form action='data.php'><select name='data'>";
foreach ($products as $key => $value) {
  echo "<option>$value</option>";
}
echo "<br><input type='submit' value='submit'>";
echo"</select></form>";
