<h1>Connect to database</h1>
<?php

$db = connectToDatabase($dsn);

if ($db) {
    echo("<p>You are now connected to the database!</p>");
} else {
    echo("<p>Unable to connect!</p>");
}
