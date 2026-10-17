<?php
/**
 * Calcula el precio con IVA.
 * @param float $precio Precio sin IVA.
 * @param int $iva Porcentaje de IVA.
 * @return float Precio final.
 */
function precioConIva($precio, $iva) {
    return $precio * (1 + $iva / 100);
}

/**
 * Función que suma dos números
 * @param int $numero1 Primer número entero a sumar.
 * @param int $numero2 Segundo número entero a sumar.
 * @return int Resultado de la suma de los dos números.
 */
function sumaLucia(int $numero1, int $numero2){
    return $numero1+$numero2;
}
?>