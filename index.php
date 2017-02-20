<?php 
	error_reporting(E_ALL);
	ini_set('display_errors',1);

	require 'tauler.php';

	echo "<h1>Dames</h1>";
	echo "<h3>Aleat a la part inferior</h3>";
	$tauler =  new Tauler(8,8,'dames');
	
	$tauler->show();

	echo "<h1>Aleat</h1>";
	$tauler = new Tauler(10,10,'aleat');

	$tauler->show();
