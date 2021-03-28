<?php
$d1 = "12:00:20 12/1/2003";
$t1 = strtotime($d1);

echo $t1;
echo "<br>";
echo date("H:i:s d/m/Y", $t1);
