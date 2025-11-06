<?php
$usuario = "Usuario"; // tu usuario Oracle
$clave = "Usuario12345"; // tu contraseña Oracle
$cadena = "localhost/XE"; // porque tu servicio es XE

$conn = oci_connect($usuario, $clave, $cadena);

if (!$conn) {
    $e = oci_error();
    echo "❌ Error de conexión: " . $e['message'];
} else {
    echo "✅ Conexión exitosa con Oracle XE";
    oci_close($conn);
}
?>
