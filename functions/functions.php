<?php 
function beräknare($hundra,$lon,$sats){ 

	$hundra = 100; 
	$skatten = $lon * $sats / $hundra; 
	$netto = $lon - $skatten; 
} 

?>