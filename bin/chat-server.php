<?php
require dirname(__DIR__) . '/vendor/autoload.php';
use Ratchet\Server\IoServer;
use Ratchet\Http\OriginCheck;
use Ratchet\WebSocket\WsServer;
use Ratchet\Http\HttpServer;
use websocket\Chat;

$checkedApp = new OriginCheck(new Chat, array('localhost'));
$checkedApp->allowedOrigins[] = 'mydomain.com';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat($checkedApp)
        )
    ),
    8080
);

$server->run();