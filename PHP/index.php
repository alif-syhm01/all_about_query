<?php
    
    include_once 'Request.php';
    include_once 'Router.php';

    $router = new Router(new Request);
    $router->get('/', function() {
        $response=array(
            'status' => true,
            'message' =>'Welcome.',
            'data' => null
        );
        header('Content-Type: application/json');
        echo json_encode($response);
    });