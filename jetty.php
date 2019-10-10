<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

$pageReference = $_GET["page"] ?? "connect";

$base = basename(__FILE__, ".php");

$pages = [
    "connect" => [
        "title" => "Connect to database",
        "file" => __DIR__ . "/$base/connect.php",
    ],
    "a" => [
        "title" => "A",
        "file" => __DIR__ . "/$base/a.php",
    ],
    "b" => [
        "title" => "B",
        "file" => __DIR__ . "/$base/b.php",
    ],
];

$page = $pages[$pageReference] ?? null;
$title = $page["title"] ?? "404";

require __DIR__ . "/view/header.php";
require __DIR__ . "/view/navbar.php";
require __DIR__ . "/view/jetty-multipage.php";
require __DIR__ . "/view/byline.php";
require __DIR__ . "/view/footer.php";
