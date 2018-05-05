<?php
require_once("core/core.system.php");
if($_GET['url'] != '') {
    $route = new stdClass();
    $route->url = $_GET['url'];
    if($_GET['apikey'] != '') {
        //Boot API Kernel
        $route->apikey = $_GET['apikey'];

        require_once("core/core.api.php");
        require_once("api/api.parts.php");
        require_once("api/api.members.php");
        $api = new $route->url($route);
    } else {
        //Boot normal sequence
        require_once("template/" . $route->url . "/" . $route->url . ".view.php");
    }
} else {
    require_once("template/home/home.view.php");
}