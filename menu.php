<?php
$menu = array();

//Home
$menu[] = array(
	'link'=>'',
	'text'=>'Home'
	);

//Products
$menu[] = array(
	'link'=>'products.php',
	'text'=>'Products',
	'items'=>array(
		array('link'=>'product1.php','text'=>'Product1'),
		array('link'=>'product2.php','text'=>'Product2'),
		array('link'=>'product3.php','text'=>'Product3'),
		array('link'=>'product3.php','text'=>'Product4'),

		array('link'=>'product3.php','text'=>'Product5'),
		)
	);

//About
$menu[] = array(
	'link'=>'about.php',
	'text'=>'About'
	);

//About
$menu[] = array(
		'link'=>'../pages/career.php',
		'text'=>'Career'
);
