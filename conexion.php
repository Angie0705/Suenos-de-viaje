<?php
$username = "USUARIO";   
$password = "Usuario12345";       
$connection_string = "localhost/XEPDB1";

$conn = oci_connect($username, $password, $connection_string);

if (!$conn) {
    $e = oci_error();
    error_log("OCI Connect error: " . $e['message']);
    http_response_code(500);
    echo json_encode(['success'=>false,'message'=>'Error de conexión a BD.']);
    exit;
}
?>

