<?php
/**
 * Created by PhpStorm.
 * User: aryx
 * Date: 2019.07.09.
 * Time: 14:54
 */

// MCDASHBOARD CONFIGURATION
// See documentation on GitHub!

define("WEBSITE_TITLE", "MCDashboard");

// CHANGE THESE!
define("USERNAME", "admin");
define("PASSWORD", "admin");

define("MC_SERVER_ADDRESS", "127.0.0.1");
define("MC_SERVER_PORT", 25565);

// Plugin descriptions can be found on GitHub
define("ENABLED_PLUGINS",
    array(
        "status",
        "rcon",
        "authme"
    ));



// PLUGIN CONFIGURATION

// [RCON CONFIG]
define("PLUGIN_RCON_PORT", 25575);

// [AUTHME CONFIG]
define("PLUGIN_AUTHME_MYSQL_SERVER", "127.0.0.1");
define("PLUGIN_AUTHME_MYSQL_USERNAME", "authme");
define("PLUGIN_AUTHME_MYSQL_PASSWORD", "authme");
define("PLUGIN_AUTHME_MYSQL_DATABASE", "authme");
define("PLUGIN_AUTHME_TABLE", "authme");