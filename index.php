<?php

function encrypt() { 

	$index = range('a', 'z');


if  (isset($_POST['string']) &&!empty($_POST['string'])) {

	$string = $_POST['string'];
	$lowercase = strtolower($string);

	$string_split = str_split($lowercase); // converts the string into an array

	end($string_split); 
       $key_index = key($string_split); // gets the key of the last item in the string

 

for ($i=0; $i <= $key_index; $i++) { 
		$search = array_search($string_split[$i], $index);
if ( $search % 2 == 0 ) {
		$search += 1;
		$odd = $search * 3;
		$odd_final = $odd + 1;
		$search = 'o'.$odd_final;
		} else {
if ($search % 2 == 1) {
		$search += 1;
		$even = $search / 2;
	 	$search='e'.$even;
		
	 }
		}
				
	 		print_r($search);
	}

}

}
encrypt();

?>

	<form action='index.php' method='POST'>
	<input type = 'text' name='string'>
	<input type = 'submit' value = 'submit'>
	</form>