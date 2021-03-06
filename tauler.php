<?php
require 'quadre.php';

class Tauler{
	private $peces=array();
	private $tipus;
	private $nRows=null;
	private $ncols=null;

	function __construct($nRows=null,$nCols=null,$tipus){
		$this->nRows = $nRows;
		$this->nCols = $nCols;
		$this->tipus=$tipus;
		switch ($this->tipus) {
			case 'dames': $this->dames($this->nRows,$this->nCols);
				break;
			case 'aleat': $this->aleat($this->nRows,$this->nCols);
				break;
		}
	}
	function dames($nRows=null, $nCols=null){
		//la intencio de aquesta funcio es que dins de peces es puguin guardar els diferents colors
		for ($i=0; $i < $nRows; $i++ ) {
			for ($x=0; $x < $nCols; $x++) { 
				if ($i%2!=0) {
					//aquest IF el que realitza es mirar si son parells en la files parelles per colocar el negre en les parelles i blanc en les imparelles
						if($x%2 != 0){
							$color = 'whitesmoke';
						}else{
							$color = 'black';
						}
					$this->peces[$i][$x] = $color;

				}else{
					//Aquest if realitza tot el contrari al anterior
						if($x%2 == 0){
							$color = 'whitesmoke';
						}else{
							$color = 'black';
						}
					$this->peces[$i][$x] = $color;
				}
				//Al final de cada if es guarda en el array quin color te cada vegada per despres poder mostrar amb el show.
				
			}
		}
	}

	function aleat($nRows=null, $nCols=null){
	
	
		for ($i=0 ; $i < $nRows; $i++ ) { 
		
			for ($x=0; $x < $nCols ; $x++) { 
				//comporbo si el valor aleatori creat es per si es coloca el color blanc o el negre i el mateix amb el if inferior
				$col= rand(1, $nCols);
				if ($x%2==0) {
					if($col%2 == 0){
					$color = 'whitesmoke';
					}else{
					$color = 'black';
					}
				}else{
					if($col%2 == 0){
					$color = 'black';
					}else{
					$color = 'whitesmoke';
					}
				}
				$this->peces[$i][$x] = $color;
			}
		}

	}

	function show(){
		echo '<table border="1">';
			for($i = 0; $i< $this->nRows; $i++){
				echo '<tr>';
					for($x = 0; $x < $this->nCols; $x++){
						$quadre = new Quadre($this->peces[$i][$x]);
					}
				echo '</tr>';
				}
				echo '</table>';
			}	

}