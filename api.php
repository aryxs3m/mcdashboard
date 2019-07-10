<?php
/**
 * Created by PhpStorm.
 * User: aryx
 * Date: 2019.07.10.
 * Time: 12:12
 */

require_once "config.inc.php";
session_start();
require_once "assets/Rcon.php";

use Thedudeguy\Rcon;


if (!isset($_SESSION['loggedin'])) {
    http_response_code(403);
    exit;
}

if (!isset($_REQUEST['request'])) {
    http_response_code(400);
} else {
    switch ($_REQUEST['request']) {

        case "rcon": apiRcon(); break;

        default: http_response_code(400);
    }
}



function apiRcon() {
    if (!isset($_REQUEST['command'])) {
        http_response_code(403);
        exit;
    } else {

        $rcon = new Rcon(MC_SERVER_ADDRESS, PLUGIN_RCON_PORT, PLUGIN_RCON_PASSWORD, PLUGIN_RCON_TIMEOUT);

        if ($rcon->connect())
        {
            $rcon->sendCommand($_REQUEST['command']);
            echo "Command sent!";
        } else {
            http_response_code(500);
            echo "Cannot connect to RCON!";
        }

    }
}