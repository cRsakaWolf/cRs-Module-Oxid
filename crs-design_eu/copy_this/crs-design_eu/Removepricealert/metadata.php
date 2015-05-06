<?php
/**
 * Metadata version
 * @author C.Bauer
 * @version 1.0
 * @package msarticleimport
 */
$sMetadataVersion = "1.1";

/**
 * Importmodul FTP - XML File to Article
 * Updates Pricing and Stock
 * Sets new Article which are not in oxarticles 
 * to tell Oxid, there are new Article to set attributes to
 */

$aModule = array (
	'id'			=> 'crs_remove_priceAlert',
	'title'			=> 'cRs-Design.eu :: Remove - pricealert - ',
	'description'	=> array(
		'de'	=> 'Entfernt der Preisalarm Funktion.',
		'en'	=> 'Removes pricealert function',
	) ,
		
	'thumbnail'		=> 'cRs-module.jpg',
	'version'		=> '1.0',
	'author'		=> 'C. Bauer',
	'email'			=> 'info@crs-design.eu',
	'url'			=> 'http://www.crs-design.eu',
	'extend'       => array(
		'oxwarticledetails'				=> '/crs-design_eu/Removepricealert/components/widgets/crs_removepricealarm_oxwarticledetails',
		'details'						=> '/crs-design_eu/Removepricealert/controllers/crs_removepricealarm_details',
	),
)
?>