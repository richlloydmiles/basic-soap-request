<?php
$client = new SoapClient("url");

$xml_string = '<?xml version="1.0" encoding="UTF-8" ?> 
<Lead xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
	<Name>Example Person</Name> 
	<ContactNumber>0000000000</ContactNumber> 
	<Email>example@mail.com</Email> 
	<Comment>I have quite a few comments actually</Comment>
</Lead>';

$pass = array('xmlstring' => $xml_string);
$result_soap = $client->LeadSubmit($pass);
?>