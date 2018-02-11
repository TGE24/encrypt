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
		$search = array_search($string_split[$i], $index); // search for each letter in the array
if ( $search % 2 == 0 ) { // condition for odd values
		$search += 1;
		$odd = $search * 3;
		$odd_final = $odd + 1;
		$search = 'o'.$odd_final;
		} else {
if ($search % 2 == 1) { // condition for even values
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
	<h2 style="padding-left : 40%; padding-top : 10%;">Enter Your String Here</h2>
	<form action='index.php' method='POST' style="padding-left : 40%;">
	<input type = 'text' name='string' style="height : 10%; font-size:120%; font-family:courier;">
	<input type = 'submit' value = 'Encrypt' style="height : 10%; background-color : red; color : black; font-size:120%; font-family:courier;">
	</form>