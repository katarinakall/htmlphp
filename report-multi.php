<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

$pageReference = $_GET["page"] ?? "kmom01";
$base = basename(__FILE__, ".php");

$pages = [
    "kmom01" => [
        "title" => "Kmom01",
        "file" => __DIR__ . "/$base/kmom01.php",
    ],
    "kmom02" => [
        "title" => "Kmom02",
        "file" => __DIR__ . "/$base/kmom02.php",
    ],
    "kmom03" => [
        "title" => "Kmom03",
        "file" => __DIR__ . "/$base/kmom03.php",
    ],
    "kmom04" => [
        "title" => "Kmom04",
        "file" => __DIR__ . "/$base/kmom04.php",
    ],
    "kmom05" => [
        "title" =>"Kmom05",
        "file" => __DIR__ . "/$base/kmom05.php",
    ],
    "kmom06" => [
        "title" =>"Kmom06",
        "file" => __DIR__ . "/$base/kmom06.php",
    ],
    "kmom10" => [
        "title" =>"Kmom10 Projekt och examination",
        "file" => __DIR__ . "/$base/kmom10.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

$title = $page["title"] ?? "404";

// Render the page
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/navbar.php";
require __DIR__ . "/view/report-mutli.php";
require __DIR__ . "/view/byline.php";
require __DIR__ . "/view/footer.php";
