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
	'id'			=> 'crs_remove_addproductinfos',
	'title'			=> 'cRs-Design.eu :: adds MwSt. inclusive and delivery inclusive to productpage ',
	'description'	=> array(
		'de'	=> 'Fügt inkl. MwSt. und Lieferung auf Productdetailseite ein.',
		'en'	=> 'Adds mwst and delivery incluse to producdetailpage',
	) ,
		
	'thumbnail'		=> 'cRs-module.jpg',
	'version'		=> '1.0',
	'author'		=> 'C. Bauer',
	'email'			=> 'info@crs-design.eu',
	'url'			=> 'http://www.crs-design.eu',
	'extend'       => array(
	),
	'extend'       => array(		 
	),
	'files'			=> array(
	),
	'templates' => array(
	),
	'settings' 		=> array(
	),
	'blocks'		=> array(
		array(
			'template'  => 'page/details/inc/productmain.tpl',
			'block'     => 'details_productmain_stockstatus',
			'file'      => '/views/blocks/productmain__details_productmain_stockstatus.tpl'
		),
	),
)
?>