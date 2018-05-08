<?php
function multiplicarTresNumeros ($v1, $v2, $v3)
{
	return $v1*$v2*$v3;
}
class Ejemplo {
	var $a;
	var $b;	
  	var $c;
	function multiplicar ()
	{
		return multiplicarTresNumeros($this->a, $this->b, $this->c);
	}
}

?>
