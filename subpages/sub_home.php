<?php
/**
 * Created by PhpStorm.
 * User: aryx
 * Date: 2019.07.09.
 * Time: 15:07
 */
?>

<div class="jumbotron jumbotron-fluid bg-primary text-light">
    <div class="container">
        <h1 class="display-4">Dashboard</h1>
    </div>
</div>

<div class="container">

<div class="row">
    <div class="col-4">
        <div class="list-group">

            <a href="index.php" class="list-group-item list-group-item-action">Status</a>

            <?php

                if (in_array("rcon", ENABLED_PLUGINS)) {
                    echo "<a href=\"index.php?plugin=rcon\" class=\"list-group-item list-group-item-action\">RCON</a>";
                }

                if (in_array("authme", ENABLED_PLUGINS)) {
                    echo "<a href=\"index.php?plugin=authme\" class=\"list-group-item list-group-item-action\">AuthMe</a>";
                }

            ?>

        </div>
    </div>
    <div class="col">

        <?php

            if (isset($_GET['plugin'])) {

                require "subpages/dash_{$_GET['plugin']}.php";

            } else {
                require "subpages/dash_status.php";
            }

        ?>

    </div>
</div>

</div>