<?php
/*Write a PHP program that uses concatenation to display an HTML anchor (<a>) element with the
text "Click here" and a link to "https://www.example.com"*/

$linktext="Click here";
$linkurl="https://www.example.com";
$htmlanchor='<a href=" '.$linkurl.' ">' .$linktext. '</a>';

echo $htmlanchor;
?>