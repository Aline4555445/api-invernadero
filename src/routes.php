<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
///
/// http://localhost/apirest/public/api/v1/employee
///

// API group
$app->group('/api', function () use ($app) {
   
    //REGISTROUSUARIOS
    $app->post('/rutacalculadora','funcionCalculadora');

    $app->post('/sensores','funcionsensores');
    $app->get('/sensores','funciongetSensoreData');

    $app->get('/catalogo','funciongetCatalogoData');

    $app->post('/invernadero','funcioninv');
    $app->get('/invernadero','funciongetInvernaderoData');
     

    $app->post('/sensor','funcionsen');
    $app->get('/sensor','funcionGetSensorData');
    $app->delete('/sensor','funcionEliminaSensor');

    $app->post('/informe','funcioninforme');
    $app->get('/informe','funciongetinformeData'); 

    
    
});


