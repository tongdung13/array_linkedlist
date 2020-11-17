<?php


include_once ("Mylist.php");

$myList = new Mylist();
$myList->addLast(5);
$myList->addLast(6);
$myList->addLast(7);
$myList->addLast(8);

echo $myList->contains(23);
echo $myList->add(2,4);