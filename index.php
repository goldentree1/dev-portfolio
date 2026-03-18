<?php

$site_data = [
    "title" => "Portfolio | Elliott Brown",
    "email" => "elliott.b1097@gmail.com",
    "linkedIn" => "https://www.linkedin.com/in/elliott-brown-846466191/",
    "github" => "https://github.com/goldentree1",
    "projects" => [
        [
            "title" => "Pletzer Lab Genome Browser",
            "type" => "work",
            "categories" => ["website", "data-processing"],
            "employer" => [
                "title" => "University of Otago (Microbiology Dept.)",
                "url" => "https://www.otago.ac.nz/microbiology-and-immunology",
            ],
            "imgs" => ["assets/imgs/plgb-relA-full.png"],
            "description" => "React web-app that allows researchers to analyse and compare genomic data from Pletzer Lab's microbiology research.
                A static site: it can be rebuilt/deployed with new genomic data via a Bash/Python data-processing script.",
            "src" =>
                "https://github.com/goldentree1/pletzer-lab-genome-browser",
            "dist" => "https://pletzerlab.com/genome-browser",
            "tech" => [
                "languages" => ["Typescript", "Bash", "Python"],
                "libs" => [
                    "React",
                    "JBrowse2",
                    "TailwindCSS",
                    "Vite",
                    "conda",
                    "bioconda",
                    "WordPress",
                ],
            ],
        ],
        [
            "title" => "Command Menu 2 (GNOME Linux extension)",
            "type" => "open-source",
            "categories" => ["Linux", "GNOME"],
            "imgs" => ["assets/imgs/cmdmenu2-1.jpg"],
            "description" => "
                Extension for the GNOME Linux desktop environment that adds a highly-customizable menu to the top bar, allowing
                quick access to frequently-used commands and apps. This was forked from another extension.",

            "src" => "https://github.com/goldentree1/gnome-command-menu-2",
            "download" =>
                "https://extensions.gnome.org/extension/8490/command-menu-2/",
            "tech" => [
                "languages" => ["Javascript"],
                "libs" => ["GJS", "Gtk4", "Adw"],
            ],
        ],
        [
            "title" => "St Clair Surf Forecast",
            "type" => "personal",
            "categories" => ["website", "database"],
            "imgs" => ["assets/imgs/stcsurf1.png"],
            "description" =>
                "Surf forecast web-app for St Clair Beach. Data is updated daily with a cronjob via MetOcean's API. MongoDB is used to store and serve historic data.",
            "src" => "https://github.com/goldentree1/stcsurf",
            "dist" => "https://stcsurf.ebmedia.xyz",
            "tech" => [
                "languages" => ["Javascript"],
                "libs" => ["React", "Next.js", "chart.js", "MongoDB"],
            ],
        ],
    ],
];

$routes = [
    "/" => "index.view.php",
];

// imports

// ROUTING EXAMPLE BELOW (so we can add 404 etc..)

// $uri = $_SERVER["REQUEST_URI"] ?? "/"; // fallback if not set
// $page_title =
//     $uri == "/" ? "PHP Router HOME!!!" : ucFirst(substr($uri, 1)) . " Page!";
//
// $routes = [
//     "/" => "views/index.router.view.php",
//     "/contact" => "views/contact.router.view.php",
// ];
// if (isset($routes["$uri"])) {
//     require $routes["$uri"];
// } else {
//     http_response_code(404);
//     require "views/404.router.view.php";
//     die();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_data["title"] ?></title>

    <!-- TODO: fonts here should be moved to a separate CSS file and not via some API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- TODO: JetBrains Mono font should be moved to a separate CSS file and not via some API -->
    <!--<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <style>
        <?php require "index.css"; ?>
    </style>
</head>

<body>
    <?php require "index.view.php"; ?>
    <script>
        <?php require "index.js"; ?>
    </script>
</body
</html>
