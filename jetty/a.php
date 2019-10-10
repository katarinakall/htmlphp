<?php

$db = connectToDatabase($dsn);
// Prepare and execute the SQL statement
$sql = "SELECT * FROM jetty";
$stmt = $db->prepare($sql);
echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

printJettyResultsetToHTMLTable($res);
