<?php

use Ratchet\Server\IoServer;
use App\Chat;

require dirname(__DIR__) . '/../vendor/autoload.php';
require dirname(__DIR__) . '/Chat.php';

$server = IoServer::factory(
    new Chat(),
    8080
);

$server->run();
