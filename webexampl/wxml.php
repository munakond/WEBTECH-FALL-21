<?php
$simplexml= new SimpleXMLElement('<?xml
version="1.0"?><books/>');
$book1= $simplexml->addChild('book');
$book1->addChild("Booktitle", "The Wandering Oz");
$publicationDate=$book1->addChild('PublicationDate');
$publicationDate->addChild("publicationYear","2020");
$publicationDate->addChild("publicationDate","27 oct");
$book2= $simplexml->addChild('book');
$book2->addChild("Booktitle", "The Roaming Fox");
$book2->addChild("PublicationDate", 2009);
file_put_contents('books.xml', $simplexml->asXML());
?>