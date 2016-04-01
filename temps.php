<?php
require_once ('lib/nusoap.php');
echo '<form name="formu" action="" method="post">
		<input type="text" name="pais" placeholder="Pais"/><br>
		<input type = "submit" name="enviar" value="Enviar"></form>';
$wsdl='http://www.webservicex.net/globalweather.asmx?wsdl';
$client = new nusoap_client($wsdl,'wsdl');
if (isset($_POST['enviar'])) {
$a=$_POST['pais'];
$b=$_POST['city'];
$params = array('CityName' => $b,'CountryName' => $a);
$result=$client->call('GetCitiesByCountry' , $params);
$test = implode('', $result);
$test2=simplexml_load_string($test);
echo '<table><th>Country</th><th>City</th>';
for ($i=0;$i<sizeof($test2);$i++) {
	echo '<tr><td>'.$test2->Table[$i]->Country.'</td><td>'.$test2->Table[$i]->City.'</td></tr>';
}
echo '</table>';
}
?>