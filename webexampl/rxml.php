<?php
$xml=simplexml_load_file("books.xml") or die("Error: can not create object");
print_r($xml);
?>