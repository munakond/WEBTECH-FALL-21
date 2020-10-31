<?php
$myfile =
fopen("newfile.txt", "w") or die("Unable to
open file!");
$txt = "mun akond<br>\n";
fwrite($myfile, $txt);

$txt = "mun akond<br>\n";
fwrite($myfile, $txt);
fclose($myfile);
?>