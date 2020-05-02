<?php
//  Normally variables are passed by value to functions
$variable = 'Je suis une variable';
echo "<h2>Passing by value</h2>";
echo "Outside the function variable is<b> $variable</b><br>";

function tryToModifyAVariable($variable){
  echo ">>>Inside the function<br>";
  echo ">>>variable is : $variable<br>";
  $variable = "Je suis modicated now";
  echo ">>>Now variable is: $variable<br>";
  echo ">>>function ends here<br>";
}
echo "Calling function and passing variable to it<br>";
tryToModifyAVariable($variable);
echo "Outside the function variable is<b> $variable</b><br>";
echo "<hr>";
//  To modify a variable, use the &
echo "<h2>Passing by reference with '&'</h2>";
echo "Outside the function variable is<b> $variable</b><br>";

function modifyAVariable(&$variable){
  echo ">>>Inside the function<br>";
  echo ">>>variable is : $variable<br>";
  $variable = "Je suis modicated now";
  echo ">>>Now variable is: $variable<br>";
  echo ">>>function ends here<br>";
}
echo "Calling function and passing variable to it<br>";
modifyAVariable($variable);
echo "Outside the function variable is<b> $variable</b><br>";
