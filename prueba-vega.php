<?php

/**
 * Script de práctica para generar documentación con PhpDocumentor.
 *
 * @author David Vega Gracia
 * @version 1.0
 * @package practica-vega
 */

/**
 * En este blockdock vemos la etiqueta para los parametros y su retorno
 * Función para sumar dos números.
 *
 * Esta función suma dos números y devuelve el resultado.
 *
 * @param int $a El primer número a sumar.
 * @param int $b El segundo número a sumar.
 * @return int El resultado de la suma.
 */
function sumar($a, $b) {
    return $a + $b;
}

/**
 * Función para calcular el área de un círculo.
 * 
 * Esta función calcula el área de un círculo dado su radio.
 *
 * @param float $radio El radio del círculo.
 * @return float El área del círculo.
 */
function calcularAreaCirculo($radio) {
    return pi() * ($radio ** 2);
}

/**
 * En este blockdock se genera documentacion solo visible para los desarrolladores.
 * @internal
 * Esta anotación es solo visible en la documentación para desarrolladores.
 */
class WisdomDispenser
{
    /**
     * En este blockdock se usa la etiqueta que evita se genere documentacion de la clase
     * que mencionamos, en este caso no se se genera documentacion del atributo
     * privado
     * Primer dicho.
     *
     * @access private
     * @var string
     */
    private $primeraFrase = 'primera frase.';
    
    /**
     * Segundo dicho.
     *
     * @access private
     * @var string
     */
    private $segundaFrase = 'segunda frase.';
    
    /**
     * Tercer dicho.
     *
     * @access private
     * @var string
     * @author David Vega
     */
    private $terceraFrase = 'tercera frase';
}

/**
 * Ejemplo de uso de la etiqueta @name.
 *
 * @name $turkify
 * @global string $GLOBALS['turquia']
 */
$GLOBALS['turquia'] = 'prueba';

/**
 * Ejemplo simple de uso de la función @global.
 *
 * Observe que la variable $turquia no está enlazada en la documentación
 * {@link $turquia} porque se ha realizado un mal ejemplo de uso de la etiqueta @name.
 *
 * @global integer $miNumero
 * @global string $turquia Representa la descripción opcional.
 */
function testit()
{
    global $_miNumero, $turquia;
}


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

