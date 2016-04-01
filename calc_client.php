<?php
 
require_once ('lib/nusoap.php');
$a=0;
$b=0;
$wsdl="http://localhost/serv/calc_server.php?wsdl";
$client = new nusoap_client($wsdl,'wsdl');
echo '<form name="formu" action="" method="post">
		<input type="text" name="valora" placeholder="Primer numero"/><br>
		<input type="text" id="valora" name="valorb" placeholder="Segundo numero"/><br>
		<input type = "submit" name="suma" value="Suma"><input type = "submit"  name="resta" value="Resta"/>
		<input type = "submit" name="div" value="Division"><input type = "submit"  name="mult" value="Multiplicacion"/></form>';
		 if (isset($_POST['suma'])) {
    	$a=$_POST['valora'];
		$b=$_POST['valorb'];
		$params = array('a' => $a, 'b'=>$b);
   		$result= $client->call('Add', $params);
		echo '<h2>Resultat</h2><pre>';
		$err = $client->getError();
		if ($err) {
		// Display the error
		echo '<p><b>Error: '.$err.'</b></p>';
				}	
				 else {
	// Display the result
				print_r($result);
					}
 			 }
 			 else if(isset($_POST['resta'])){
 		$a=$_POST['valora'];
		$b=$_POST['valorb'];
		$params = array('a' => $a, 'b'=>$b);
   		$result= $client->call('Substract', $params);
		echo '<h2>Resultat</h2><pre>';
		$err = $client->getError();
		if ($err) {
		// Display the error
		echo '<p><b>Error: '.$err.'</b></p>';

 			 }
 			  else {
	// Display the result
				print_r($result);
					}
		
							}
			else if(isset($_POST['mult'])){
 		$a=$_POST['valora'];
		$b=$_POST['valorb'];
		$params = array('a' => $a, 'b'=>$b);
   		$result= $client->call('Mult', $params);
		echo '<h2>Resultat</h2><pre>';
		$err = $client->getError();
		if ($err) {
		// Display the error
		echo '<p><b>Error: '.$err.'</b></p>';

 			 }
 			  else {
	// Display the result
				print_r($result);
					}
		
							}

			else if(isset($_POST['div'])){
 		$a=$_POST['valora'];
		$b=$_POST['valorb'];
		$params = array('a' => $a, 'b'=>$b);
   		$result= $client->call('Div', $params);
		echo '<h2>Resultat</h2><pre>';
		$err = $client->getError();
		if ($err) {
		// Display the error
		echo '<p><b>Error: '.$err.'</b></p>';

 			 }
 			  else {
	// Display the result
				print_r($result);
					}
		
							}


?>



