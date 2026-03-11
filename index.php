<?php
// Professional and personal projects to display.
$projects = [
    [
        "title" => "Genome Browser for Pletzer Lab",
        "employer" => "University of Otago (Microbiology Dept.)",
        "employerUrl" => "https://pletzerlab.com",
        "imgUrls" => ["/imgs/pletzer-lab-genome-browser-screenshot.png"],
        "description" => "
            An interactive genome browser web-app and associated data-processing pipeline made for Pletzer Lab (University of Otago).
            Researchers use it to visually analyse and compare the lab's bacterial experiments in an easy-to-use web interface.
            This allows quick identification of differences between bacterial strains through gene expression patterns and
            also provides detailed genomic information. It can be re-built by the lab whenever new data becomes available.
        ",
        "programmingLangs" => ["TypeScript", "Bash", "Python", "HTML/CSS"],
        "programmingLibs" => [
            "React",
            "Vite",
            "Bioinformatics Tools (samtools, bedtools, deeptools, agat)",
            "WordPress",
        ],
        "srcUrl" => "https://github.com/goldentree1/pletzer-lab-genome-browser",
        "siteUrl" => "https://pletzerlab.com/genome-browser",
    ],
    [
        "title" => "Command Menu 2 (GNOME Linux extension)",
        "imgUrls" => ["imgs/gnome-command-menu-2-screenshot-1.jpg"],
        "description" => "
           An extension for the GNOME Linux desktop environment that adds a highly-customizable command menu to the top bar, allowing
           users to quickly access apps, files, and custom scripts.
        ",
        "programmingLangs" => ["Javascript"],
        "programmingLibs" => ["GJS (GNOME Javascript)", "GTK4", "Adw"],
        "srcUrl" => "https://github.com/goldentree1/gnome-command-menu-2",
        "downloadUrl" =>
            "https://extensions.gnome.org/extension/8490/command-menu-2/",
    ],
    [
        "title" => "Command Menu 2 (GNOME Linux extension)",
        "imgUrls" => ["imgs/gnome-command-menu-2-screenshot-1.jpg"],
        "description" => "
           An extension for the GNOME Linux desktop environment that adds a highly-customizable command menu to the top bar, allowing
           users to quickly access apps, files, and custom scripts.
        ",
        "programmingLangs" => ["Javascript"],
        "programmingLibs" => ["GJS (GNOME Javascript)", "GTK4", "Adw"],
        "srcUrl" => "https://github.com/goldentree1/gnome-command-menu-2",
        "downloadUrl" =>
            "https://extensions.gnome.org/extension/8490/command-menu-2/",
    ],
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
    <title>Portfolio | Elliott Brown</title>
    <?php require "index.styles.php"; ?>
    <!--<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>-->
</head>

<body>
    <?php require "index.view.php"; ?>
    <?php require "index.scripts.php"; ?>
</body
</html>
