<?
require __DIR__ . '/../../src/models/invernadero.php';
function funcioninv($request){
    $objinvernadero= new Invernadero();
    return $objinvernadero->inv($request);
}
function funciongetInvernaderoData($request){
    $objInvernadero= new Invernadero();
    return $objInvernadero->getInvernaderoData($request);
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