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
	'id'			=> 'crs_remove_addToCart',
	'title'			=> 'cRs-Design.eu :: Remove - add to cart - ',
	'description'	=> array(
		'de'	=> 'Entfernt den Button - In den Warenkorb auf der Kategorieseite.',
		'en'	=> 'Removes button - add to cart from categoriepage',
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
			'template'  => 'widget/product/listitem_infogrid.tpl',
			'block'     => 'widget_product_listitem_infogrid_tobasket',
			'file'      => '/views/blocks/listitem_infogrid_basket.tpl'
		),
	),
)
?>