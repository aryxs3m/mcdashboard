<?php

    require "assets/server-status/MCPing.php";
    require "assets/server-status/Responses/MCBaseResponse.php";
    require "assets/server-status/Responses/MCPingResponse.php";

    use MCServerStatus\MCPing;
    use MCServerStatus\MCBaseResponse;
    use MCServerStatus\MCPingResponse;

    $mcResponse = MCPing::check(MC_SERVER_ADDRESS, MC_SERVER_PORT, MC_SERVER_TIMEOUT, MC_OLDER_THAN_17);

?>

<h1 class="p-3 bg-primary text-light">Status</h1>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title"><?= $mcResponse->motd ?></h5>
        <p class="card-text"><?= $mcResponse->version ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><i class="fas fa-user fa-fw"></i> Players: <?= $mcResponse->players ?></li>
        <li class="list-group-item"><i class="fas fa-user fa-fw"></i> Max Players: <?= $mcResponse->max_players ?></li>
        <li class="list-group-item"><i class="fas fa-ethernet fa-fw"></i> Ping: <?= $mcResponse->ping ?> ms</li>
    </ul>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Players</h5>
        <p class="card-text">This list may not be complete!</p>
    </div>
    <ul class="list-group list-group-flush">
        <?php

        foreach ($mcResponse->sample_player_list as $player) {
            echo "<li class=\"list-group-item\"><i class=\"fas fa-user fa-fw\"></i> {$player['name']}</li>";
        }

        ?>
    </ul>
</div>