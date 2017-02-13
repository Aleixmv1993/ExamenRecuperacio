<?php 
class Quadre{


	protected $color;
	function __construct($color){
		$this->color=$color;
		$this->show();
	}

	function show(){
		echo '<td style="padding-left:2px;background-color:'.$this->color.'">'.'<div style="height:50px;width:50px;overflow:hidden;"></div></td>';
	}

	}