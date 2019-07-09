<?php
/**
 * Created by PhpStorm.
 * User: aryx
 * Date: 2019.07.09.
 * Time: 15:07
 */

    // validate login on form send

    $error = null;

    if (USERNAME == "admin" && PASSWORD == "admin") {
        $error = "You haven't changed the default credentials for MCDashboard. You can do it in the <strong>config.inc.php</strong>.";
    }

    if (isset(
            $_POST['username'],
            $_POST['password'])
    ) {
        if ($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD) {
            $_SESSION['loggedin'] = true;
            header("Location:index.php");
        } else {
            $error = "Invalid credentials!";
        }
    }


?>

<div class="jumbotron jumbotron-fluid bg-primary text-light">
    <div class="container">
        <h1 class="display-4">Login</h1>
    </div>
</div>

<div class="container">

    <?php

        if (isset($error)) {
            echo "<p class='alert alert-danger'>$error</p>";
        }

    ?>

    <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>