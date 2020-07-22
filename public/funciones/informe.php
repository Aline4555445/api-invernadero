<?
require __DIR__ . '/../../src/models/informe.php';
function funcioninforme($request){
    $objInfo= new informe();
    return $objInfo->insertarinfo($request);
}
function funciongetinformeData($request){
    $objInfo= new informe();
    return $objInfo->getinfoData($request);
}
/*//eliminar
function funcionEliminarsensores($request){
    $objInfo= new informe();
    return $objInfo->eliminarSensor($request);
}

//actualizar
function funcionActualizarsensores($request){
    $objInfo= new informe();
    return $objInfo->actualizarSensor($request);
}*/