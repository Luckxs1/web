<?php
require_once 'controller/cont.router.php';
$router = new Router();
$router->requestPage()->renderPage();
?>