<?php

    $conn = new mysqli(
            PLUGIN_AUTHME_MYSQL_SERVER,
            PLUGIN_AUTHME_MYSQL_USERNAME,
            PLUGIN_AUTHME_MYSQL_PASSWORD,
            PLUGIN_AUTHME_MYSQL_PASSWORD
        );

    if ($conn->connect_error) {
        die("MySQL error! " . $conn->connect_error);
    }

    $conn->query("SET NAMES UTF8"); // just to be sure

    $stmt = $conn->prepare("SELECT id, username, ip, isLogged FROM " . PLUGIN_AUTHME_TABLE . " ORDER BY id");
    $stmt->bind_result($userId, $userName, $userIp, $userOnline);
    $stmt->execute();

?>

<h1 class="p-3 bg-primary text-light">AuthMe</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Online</th>
        <th scope="col">Last IP</th>
        <th scope="col">Manage</th>
    </tr>
    </thead>
    <tbody>

    <?php

    while ($stmt->fetch()) {

        if ($userOnline) {
            $onlineBadgeColor = "success";
            $onlineBadgeText = "Yes";
        } else {
            $onlineBadgeColor = "danger";
            $onlineBadgeText = "No";
        }

        ?>

        <tr>
            <th scope="row"><?= $userId ?></th>
            <td><?= $userName ?></td>
            <td><span class="badge badge-<?= $onlineBadgeColor ?>"><?= $onlineBadgeText ?></span></td>
            <td><?= $userIp ?? "Unknown" ?></td>
            <td>
                <a class="btn btn-sm btn-outline-primary btn-delete-account" data-id=""><i class="fas fa-trash"></i></a>
            </td>
        </tr>

        <?php
    }

    ?>

    </tbody>
</table>

<?php

    $stmt->close();
    $conn->close();

?>