<?php
/**
 * Created by PhpStorm.
 * User: aryx
 * Date: 2019.07.09.
 * Time: 14:55
 */

require "config.inc.php";

session_start();

require_once "template/head.tpl.php";

if (!isset($_SESSION['loggedin'])) {
    require_once "subpages/sub_login.php";
} else {
    switch ($_GET['page']) {
        case "logout": require_once "subpages/sub_logout.php"; break;

        default: require_once "subpages/sub_home.php";
    }
}

require_once "template/foot.tpl.php";
