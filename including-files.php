<?php
//  Bring that information here
require_once 'partials/variables-to-share.php';
//  Now we can use variables defined in that external file
echo "<h1>Including files</h1>";
// echo "<p></p>";
echo "<p>You can use include, include_once, require and require_once</p>";
echo "<p>This data has been defined in another file</p>";

echo "user: $userName<br>";
echo "address: $address<br>";
echo "telephone: $telephone<br>";
