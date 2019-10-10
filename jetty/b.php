<?php

$db = connectToDatabase($dsn);

// Prepare the SQL statement
$sql = "SELECT * FROM jetty WHERE position = ?";
$stmt = $db->prepare($sql);

if (isset($_GET['position']) == false) {
    exit("<p>Nothing to display.");
} else {
    $position = [$_GET['position']];
    $stmt->execute($position);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    printJettyResultsetToHTMLTable($res);
}
