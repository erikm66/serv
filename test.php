<?php
require_once('lib/nusoap.php');

$url = 'http://www.webservicex.net/globalweather.asmx?wsdl';
$soapclient = new nusoap_client($url, TRUE);
$function = 'GetWeather';
$params = array('CityName' => 'medellin','CountryName' => 'colombia');
$result = $soapclient->call($function , $params);

if (!$error = $soapclient->getError())
echo "Resultado: ".print_r ($result);
else
echo "ERROR:".print_r ($error);
?>