<?
require __DIR__ . '/../../src/models/sensor.php';
function funcionsen($request){
    $objSen= new sensor();
    return $objSen->insertarSen($request);
}
function funcionGetSensorData($request){
    $objSen= new sensor();
    return $objSen->getSenData($request);
}
//eliminar
function funcionEliminaSensor($request){
    $objSen= new sensor();
    return $objSen->eliminarSen($request);
}

/*//actualizar
function funcionActualizarsensores($request){
    $objSensor= new Sensores();
    return $objSensor->actualizarSensor($request);
}*/