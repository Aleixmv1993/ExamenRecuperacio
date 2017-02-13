<?php 
	error_reporting(E_ALL);
	ini_set('display_errors',1);

	require 'tauler.php';

	$tauler =  new Tauler(8,8,'dames');
	
	$tauler->show();

	/*$tauler = new Tauler(10,10,'aleat');

	$tauler->show();*/
