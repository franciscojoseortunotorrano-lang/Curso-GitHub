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
 * Calcula el total tras aplicar un descuento.
 *
 * @param float $precio
 * @param float $porcentaje
 * @return float
 */
function descuentoFran($precio, $descuento){
    return $precio - ($precio*($descuento/100));
}
?>