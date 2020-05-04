<?php

echo "<h1>Working with strings</h1>";

// You can use echo or print to show strings
echo "hello world using echo <br>";
print("hello world using print<br>");

// To concatenate use '.' (the dot) but you can insert a variable
// inside a string if you create it with "" (double quotes)

$name = "Maria";
$address = "xyx 123";
$data = "Name: $name, $address...";
echo "<h2>Concatenate and interpolate strings</h2>";
echo "$data<br>";

// The backslash ('\')allows to scape a character that otherwise would be interpreted
// in a differente way
$stringWithDoubleQuotes = "The man was \"Alegre\" that night";
echo $stringWithDoubleQuotes; echo "<br>";

//  HEREDOC
echo "<h1>HEREDOC</h1><p>This really long string was created with HEREDOC</p>";
$heredocString = <<<LIMITER
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
in culpa qui officia deserunt mollit anim id est laborum.
LIMITER;
echo $heredocString;echo "<br>";

echo "<h1>Useful string functions</h1>";
?>
<h3>case managmente</h3>
<ul>
  <li>trim</li>
  <li>strtolower</li>
  <li>strtouper</li>
  <li>ucfirst</li>
  <li>lcfirst</li>
</ul>
<h3>searching</h3>
<ul>
  <li>str_word_count</li>
  <li>strlen</li>
  <li>strstr</li>
  <li>stristr</li>
  <li>strpos</li>
  <li>str_replace</li>
  <li>substr</li>
</ul>
<h3>modification</h3>
<ul>
  <li>strip_tags</li>
  <li>addslashes</li>
  <li>stripslashes</li>
  <li>htmlentities</li>
  <li>str_shuffle</li>

</ul>
<hr>
<h3>examples</h3>
<h4>trim</h4>
<?php
// In the web browser this characters are ignored though.
$longString = "\t\n\0This string contains several whitespaces at beginning and end but trim eliminates them\t\x0B";
$longStringCharsQtty = strlen($longString);
$longStringTrimmed = trim($longString);
$longStringTrimmedCharsQtty = strlen($longStringTrimmed);
 ?>
 <p>This string contains whitespaces at beginning and end</p>
 <?php var_dump($longString)?>
 <br>
 <?php echo "Original string contains : ".$longStringCharsQtty." chars"; ?>
 <br>
 <?php echo "Trimmed string contains : ".$longStringTrimmedCharsQtty." chars"; ?>
