<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="aryxs3m">
    <title><?= WEBSITE_TITLE ?></title>

    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/template.css" rel="stylesheet">
    <link href="styles/mcdashboard.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <a class="navbar-brand" href="index.php"><?= WEBSITE_TITLE ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

      </ul>
        <ul class="navbar-nav  mt-2 mt-md-0">

            <?php

            if (isset($_SESSION['loggedin'])) {

                echo "<li class=\"nav-item\">                    
                            <a class=\"nav-link\" href=\"index.php?page=logout\">Logout</a>
                        </li>";
            }

            ?>

        </ul>
    </div>
  </nav>
</header>

<main role="main">
