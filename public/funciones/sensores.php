<?
require __DIR__ . '/../../src/models/sensores.php';
function funcionsensores($request){
    $objSensor= new Sensores();
    return $objSensor->insertarSensor($request);
}
function funciongetSensoreData($request){
    $objSensor= new Sensores();
    return $objSensor->getSensorData($request);
}
/*//eliminar
function funcionEliminarsensores($request){
    $objSensor= new Sensores();
    return $objSensor->eliminarSensor($request);
}

//actualizar
function funcionActualizarsensores($request){
    $objSensor= new Sensores();
    return $objSensor->actualizarSensor($request);
}*/