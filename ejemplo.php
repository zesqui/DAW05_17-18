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
 * Esta función retorna la multiplicación de tres
 * números recibidos
 *
 * @param type $v1 Primer número recibido
 * @param type $v2 Segundo número recibido
 * @param type $v3 Tercer número recibido
 *
 * @return type Retorna la multiplicación
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
	var $a;
	var $b;	
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
