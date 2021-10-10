<?php

    $loadScripts = array("plugin_rcon.js");

?>

<h1 class="p-3 bg-primary text-light">RCON</h1>

<div id="logplace"></div>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Say something</h5>

        <div class="input-group">
            <input type="text" id="say_box" class="form-control" placeholder="Hello!" aria-label="Hello!">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-say">Say</button>
            </div>
        </div>

    </div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Atmosphere</h5>
        <p class="card-text">Set time and weather</p>
        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Atmosphere change buttons">
            <div class="btn-group mr-2" role="group" aria-label="Set time">
                <button type="button" class="btn btn-primary btn-rcon-easy" data-command="time set day"><i class="fas fa-sun"></i> Day</button>
                <button type="button" class="btn btn-primary btn-rcon-easy" data-command="time set night"><i class="fas fa-moon"></i> Night</button>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Set weather">
                <button type="button" class="btn btn-primary btn-rcon-easy" data-command="weather clear"><i class="fas fa-sun"></i> Clear</button>
                <button type="button" class="btn btn-primary btn-rcon-easy" data-command="weather rain"><i class="fas fa-cloud"></i> Rain</button>
                <button type="button" class="btn btn-primary btn-rcon-easy" data-command="weather thunder"><i class="fas fa-bolt"></i> Thunder</button>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Gamemode</h5>
        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-primary btn-rcon-easy" data-command="defaultgamemode creative"><i class="fas fa-cube"></i> Creative</button>
                <button type="button" class="btn btn-primary btn-rcon-easy" data-command="defaultgamemode survival"><i class="fas fa-shield-alt"></i> Survival</button>
                <button type="button" class="btn btn-primary btn-rcon-easy" data-command="defaultgamemode adventure"><i class="fas fa-map"></i> Adventure</button>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Kick/ban/unban player</h5>

        <div class="input-group">
            <input type="text" id="kbu_player_name" class="form-control" placeholder="Player name" aria-label="Player name">
            <div class="input-group-append">
                <button class="btn btn-primary btn-moderate" type="button" data-command="kick">Kick</button>
                <button class="btn btn-primary btn-moderate" type="button" data-command="ban">Ban</button>
                <button class="btn btn-primary btn-moderate" type="button" data-command="pardon">Unban</button>
            </div>
        </div>

    </div>
</div>

<div class="card bg-danger text-light">
    <div class="card-body">
        <h5 class="card-title">Custom command</h5>

        <div class="input-group">
            <input type="text" id="command_box" class="form-control" placeholder="op yourname" aria-label="op yourname">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-exec">Execute</button>
            </div>
        </div>

    </div>
</div>