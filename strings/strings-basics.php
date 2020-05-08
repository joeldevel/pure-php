<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>
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
</section>
<section>
  <article class="">
    <h3>case managment</h3>
    <ul>
      <li><a href="#trim">trim</a></li>
      <li><a href="#strtolower">strtolower</a></li>
      <li><a href="#strtoupper">strtoupper</a></li>
      <li><a href="#ucfirst">ucfirst</a></li>
      <li><a href="#lcfirst">lcfirst</a></li>
    </ul>
  </article>
<article class="">
  <h3>searching</h3>
  <ul>
    <li><a href="#wordCount">str_word_count</a></li>
    <li><a href="#strlen">strlen</a></li>
    <li><a href="#strstr">strstr</a></li>
    <li><a href="#stristr">stristr</a></li>
    <li><a href="#strpos">strpos</a></li>
    <li><a href="#str_replace">str_replace</a></li>
    <li><a href="#substr">substr</a></li>
  </ul>
</article>
<article class="">
  <h3>modification</h3>
  <ul>
    <li><a href="#stripTags">strip_tags</a></li>
    <li><a href="#addslashes">addslashes</a></li>
    <li><a href="#stripslashes">stripslashes</a></li>
    <li><a href="#htmlentities">htmlentities</a></li>
    <li><a href="#str_shuffle">str_shuffle</a> </li>
  </ul>
</article>
<hr>
<h3>examples</h3>

<h4 id="trim">trim</h4>
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
 <h4 id="trim">trim</h4>
 <?php
  ?>

  <h4 id="strtolower">strtolower</h4>
  <?php
    $mixedCapString ="THiS sTrINg IS WeIRd";
    $loweredString = strtolower($mixedCapString);
   ?>
  <p>strtolower function shift the whole string into lowercase</p>
  <?php echo "This : $mixedCapString"?>
  <br>
  <?php echo "Becomes this : $loweredString" ?>
<!-- strtoupper -->
  <h4 id="strtouper">strtouper</h4>
  <?php
    $upperedString = strtoupper($mixedCapString);
  ?>
  <p>strtoupper function shift the whole string into uppercase</p>
  <?php echo "This : $mixedCapString";?>
  <br>
  <?php echo "Becomes this : $upperedString"; ?>

<!-- ucfirst -->
  <h4 id="ucfirst">ucfirst</h4>
  <?php
    $stringInLower = '  this string starts in lower';
    $stringFirstUpper = ucfirst(trim($stringInLower));
  ?>
  <p>ucfirst function shift the first character of a string into uppercase
    <small>Firs trim the string to be shure it is capitalized</small>
  </p>
  <?php echo "This : $stringInLower";?>
  <br>
  <?php echo "Becomes this : $stringFirstUpper"; ?>

  <!-- lcfirst -->
  <h4 id="lcfirst">lcfirst</h4>
  <?php
    $stringInUpper = '  This string starts in upper';
    $stringFirstLower = lcfirst(trim($stringInUpper));
  ?>
  <p>lcfirst function shift the first character of a string into lowercase
    <small>Firs trim the string to be shure it is capitalized</small>
  </p>
  <?php echo "This : $stringInUpper";?>
  <br>
  <?php echo "Becomes this : $stringFirstLower"; ?>
<!-- searching -->
<h4 id="wordCount">str_word_count</h4>
<p>Counts the number of words inside a string</p>
<?php
$stringToAnalize = "This is a remarkably interesting line.";
echo "The string <em><b>$stringToAnalize</b></em> has " .str_word_count($stringToAnalize) . " words.";
 ?>
 <p>But also could return an array with the words of a string as elements, if you pass it a '1' as argument</p>
<pre>
<?php
// echo "The string <em><b>$stringToAnalize</b></em> has " .str_word_count($stringToAnalize) . " words.";
print_r(str_word_count($stringToAnalize,1));
 ?>
</pre>

<!-- strlen -->
<h4 id="strlen">strlen</h4>
<p>Returns the length of the given string. </p>
<p>php.net manual says strlen returns the number of bytes of a string,
   so if you use UTF8 encoded characters, you better use mb_strlen, or pass
    the string through utf_decode first, as some users suggest.</p>
<?php
echo "The string <em><b>$stringToAnalize</b></em> has " .strlen($stringToAnalize) . " chars.";
 ?>

<!-- strstr -->
<h4 id="strstr">strstr</h4>
<p>Find the first occurrence of a string. Returns part of haystack string
  starting from and including the first occurrence of needle to the end of
  haystack.
</p>
<p>In this example mail the domain of an email is extracted using strstr</p>
<?php
$email  = 'riceandbroccoli@ubermail.com';
$domain = strstr($email, '@');
echo "Mail is <b>$email</b><br>";
echo "domain is <b>$domain</b>"; // prints @ubermail.com
 ?>
 <p>But also can be used to get the portion of a string befor the delimiter</p>
 <?php
 $user = strstr($email, '@', true); // As of PHP 5.3.0
 echo "Name is: <b>$user</b>"; // prints riceandbroccoli
  ?>
  <!-- stristr -->
<h4 id="stristr">stristr</h4>
<p>Like strstr but <b>case insensitive</b>
</p>
<h4 id="strpos">strpos</h4>
<p>Find the position of the first occurrence of a substring in a string</p>

<?php
$mystring = 'abcedarius';
$findme   = 'd';
$pos = strpos($mystring, $findme);

// From php.net
// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string <b>'$findme'</b> was not found in the string <b>'$mystring'</b>";
} else {
    echo "The string <b>'$findme'</b> was found in the string <b>'$mystring'</b>";
    echo " and exists at position $pos";
}
?>
<!-- str str_replace -->
<h4 id="str_replace">str_replace</h4>
<p>Replace text within a portion of a string</p>

<?php
$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n";

/* These two examples replace all of $var with 'bob'. */
echo substr_replace($var, 'bob', 0) . "<br />\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

/* Insert 'bob' right at the beginning of $var. */
echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

/* These next two replace 'MNRPQR' in $var with 'bob'. */
echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

/* Delete 'MNRPQR' from $var. */
echo substr_replace($var, '', 10, -1) . "<br />\n";
?>

<!-- substr -->
<h4 id="substr">substr</h4>
<p> Return part of a string</p>

<?php
$word = 'abcdef';

$rest = substr($word, -1);    // returns "f"
$rest = substr($word, -2);    // returns "ef"
$rest = substr($word, -3, 1); // returns "d"
?>

<!-- strip_tags -->
<article class="" id="stripTags">
  <h4>strip_tags</h4>
  <p>Strip HTML and PHP tags from a string</p>

  <?php
  $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
  print_r( "without strip_tags: $text<br>");
  echo "Using strip_tags:". strip_tags($text);
  echo "\n";

  // Allow <p> and <a>
  echo strip_tags($text, '<p><a>');

  // as of PHP 7.4.0 the line above can be written as:
  // echo strip_tags($text, ['p', 'a']);
  ?>
</article>
<article class="" id="addslashes">
  <h4>addslashes</h4>
  <p>Quote string with slashes.Returns a string with backslashes added before
     characters that need to be escaped.
    single quote (')
    double quote (")
    backslash (\)
    NUL (the NUL byte)
   </p>
   <?php
   $str = "Is your name O'Reilly?";

   // Outputs: Is your name O\'Reilly?
   echo addslashes($str);
   ?>
</article>
<article class="" id="stripslashes">
  <h4>stripslashes</h4>
  <p>Un-quotes a quoted string</p>

<?php
$str = "Is your name O\'reilly?";

// Outputs: Is your name O'reilly?
echo stripslashes($str);
?>

</article>
<article class="" id="htmlentities">
  <h4>htmlentities</h4>
  <p>Convert all applicable characters to HTML entities</p>
  <p> This function is identical to htmlspecialchars() in all ways, except with
    htmlentities(), all characters which have HTML character entity
    equivalents are translated into these entities. If you want to decode
    instead (the reverse) you can use html_entity_decode().
  </p>

  <?php
  $str = "A 'quote' is <b>bold</b>";
  echo "String is: $str<br>";
  // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
  echo "Using htmlentities: ".htmlentities($str);
  // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
  echo htmlentities($str, ENT_QUOTES);
  ?>
</article>
<article class="" id="str_shuffle">
  <h4>str_shuffle</h4>
    <p>Randomly shuffles a string .<b>Should not be used for cryptographic purposes</b></p>

    <?php
    $str = 'this is the string befor shuffling';
    echo "Before shuffle: $str<br>";

    $shuffled = str_shuffle($str);

    echo "After shuffle: $shuffled";
    ?>

</article>
</section>
</body>
</html>
