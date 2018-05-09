<?php
/**
*
* El archivo ejemplo.php es un archivo que contiene dos
* funciones y una clase para multiplicar unos números
*
*/

/**
 *
 * Función para multiplicar los tres números
 *
 * Esta función retorna la multiplicación de tres
 * números recibidos
 *
 * @param int $v1 Primer
 * @param int $v2 Segundo
 * @param int $v3 Tercer
 *
 * @return int Retorna la multiplicación
 *
 */
function multiplicarTresNumeros ($v1, $v2, $v3)
{
	return $v1*$v2*$v3;
}
/**
 * Clase ejemplo
 * 
 * Esta clase contiene una función 
 * que multiplica los números recibidos
 * 
 * @author José Francisco Castillejo
 */
class Ejemplo {
	/**
	 * Variable para el primer número
	 *
	 */
	var $a;
	/**
	 * Variable para el segundo número
	 *
	 */
	var $b;	
	/**
	 * Variable para el tercer número
	 *
	 */
  	var $c;
	/**
         * Función que llama a la función
	 * multiplicarTresNumeros con los
	 * números recibidos en la clase
	 *
         * @return type multiplicarTresNumeros 
         */
	function multiplicar ()
	{
		return multiplicarTresNumeros($this->a, $this->b, $this->c);
	}
}

?>
