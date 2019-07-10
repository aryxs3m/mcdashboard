# MCDashboard

Responsive, self-hosted PHP web dashboard for managing your Minecraft server.

![Screenshot](https://i.imgur.com/d4bKiMw.png)

Bootstrap 4 based interface for a sweet, responsive user experience.

MCDashboard uses these libraries:
* [Lukasss93/minecraft-server-status](https://github.com/Lukasss93/minecraft-server-status)
* [thedudeguy/PHP-Minecraft-Rcon](https://github.com/thedudeguy/PHP-Minecraft-Rcon)

## Requirements
* PHP 5.6 >=
* PHP JSON
* PHP iconv

# Installation

0. Install apache2/nginx, PHP
1. Clone repository to the web server root directory
2. Edit ```config.inc.php```
3. Log in!

# Plugins
You can enable/disable plugins in the configuration file.

Plugin name | Description
----------- | -----------
rcon | Gives full access to RCON. You must enable RCON on your server too.
authme | Manage AuthMe users. Only works with MySQL.
