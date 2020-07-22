<?
require __DIR__ . '/../../src/models/catalogo.php';
/*function funcionCat($request){
    $objCat= new Catalogo();
    return $objSensor->insertarCatalogo($request);
}*/
function funciongetCatalogoData($request){
    $objCatalogo= new Catalogo();
    return $objCatalogo->getCatalogoData($request);
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