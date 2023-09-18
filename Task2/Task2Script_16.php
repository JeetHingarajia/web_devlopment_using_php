<?php
/* Script_16: Develop a PHP script that takes a sentence as input and counts the number of vowels in 
it*/
$sentence = "I am Mr.Jeetubhai";
$vowelCount = 0;
for ($i = 0; $i < strlen($sentence); $i++) {
    $char = $sentence[$i];

    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
		$vowelCount++;
    }
}
echo "The number of vowels in the sentence is: $vowelCount";
?>







?>