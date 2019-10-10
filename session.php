<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

$pageReference = $_GET["page"] ?? "print-session";
$base = basename(__FILE__, ".php");
$pages = [
    "print-session" => [
        "title" => "Print the content of \$_SESSION variable",
        "file" => __DIR__ . "/$base/print-session.php",
    ],
    "destroy-session" => [
        "title" => "Destroy the \$_SESSION variable",
        "file" => __DIR__ . "/$base/destroy-session.php",
    ],
    "add-value-session" => [
        "title" => "Add a value to the \$_SESSION variable",
        "file" => __DIR__ . "/$base/add-value-session.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";

require __DIR__ . "/view/header.php";
require __DIR__ . "/view/navbar.php";
require __DIR__ . "/view/multipage.php";
require __DIR__ . "/view/byline.php";
require __DIR__ . "/view/footer.php";
