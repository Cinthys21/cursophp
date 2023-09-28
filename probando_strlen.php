<?php
$foo = null;
$len = strlen(null);
$bar = '';

echo "Length: " . strlen($foo) . "<br>";
echo "Length: $len <br>";
echo "Length: " . strlen(null) . "<br>";

if (strlen($foo) === 0) echo 'Null length is Zero <br>';
if ($len === 0) echo 'Null length is still Zero <br>';

if (strlen($foo) == 0 && !is_null($foo)) echo '!is_null(): $foo is truly an empty string <br>';
else echo '!is_null(): $foo is probably null <br>';

if (strlen($foo) == 0 && isset($foo)) echo 'isset(): $foo is truly an empty string <br>';
else echo 'isset(): $foo is probably null <br>';

if (strlen($bar) == 0 && !is_null($bar)) echo '!is_null(): $bar is truly an empty string <br>';
else echo '!is_null(): $foo is probably null <br>';

if (strlen($bar) == 0 && isset($bar)) echo 'isset(): $bar is truly an empty string <br>';
else echo 'isset(): $foo is probably null <br>';
?>