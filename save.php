<?php
include 'connection.php';
header("Access-Control-Allow-Origin: *");


$profecha = $_POST['fecha'];
$proseguro = $_POST['seguro'];
$pronombrepers = $_POST['nombrepers'];
$pronombreaso = $_POST['nombreaso'];
$prodiciplina = $_POST['disiplina'];
$procategoria = $_POST['categoria'];
$prodireccion = $_POST['direccion'];
$protelefono = $_POST['telefono'];
$proemail = $_POST['email'];
$procurp = $_POST['curp'];
$procontactoemer = $_POST['contactoemer'];
$protelefonoemer = $_POST['telefonoemer'];
$prosangre = $_POST['sangre'];
$propopular = $_POST['popular'];
$proasociada = $_POST['asociada'];
$propresi = $_POST['presi'];
$protelefonopresi = $_POST['telefonopresi'];
$prosecre = $_POST['secre'];
$protelefonosecre = $_POST['telefonosecre'];
$proubicacion = $_POST['ubicacion'];
$prodomicilio = $_POST['domicilio'];
$prodiasact = $_POST['diasact'];
$prohoras = $_POST['horas'];
$procargo = $_POST['cargo'];
$proteso = $_POST['teso'];
$protelefonoteso = $_POST['telefonoteso'];
$procodpostal = $_POST['codpostal'];

$sqlQuery = "INSERT INTO formulario 
(fecha,seguro,nombrepers,nombreaso,disiplina,categoria,direccion,telefono,email,curp,contactoemer,telefonoemer,sangre,popular,asociada,presi,telefonopresi,secre,telefonosecre,ubicacion,domicilio,diasact,horas,cargo,teso,telefonoteso,codpostal) 
VALUES 
('".$profecha."','".$proseguro."','".$pronombrepers."','".$pronombreaso."','".$prodiciplina."','".$procategoria."','".$prodireccion."','".$protelefono."','".$proemail."','".$procurp."','".$procontactoemer."','".$protelefonoemer."','".$prosangre."','".$propopular."','".$proasociada."','".$propresi."','".$protelefonopresi."','".$prosecre."','".$protelefonosecre."','".$proubicacion."','".$prodomicilio."','".$prodiasact."','".$prohoras."','".$procargo."','".$proteso."','".$protelefonoteso."','".$procodpostal."')";

$resultOfQuery = $connect->query($sqlQuery);

if($resultOfQuery){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("seccess"=>false));
}