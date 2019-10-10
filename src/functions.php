<?php
/**
 * Definitions of commonly used functions.
 */
function sessionDestroy()
{
    // Unset all of the session variables.
    $_SESSION = [];

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}

function connectToDatabase($dsn)
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
    return $db;
}

function printJettyResultsetToHTMLTable($res)
{
    $rows = null;
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td><a href='?page=b&position={$row['position']}'>{$row['position']}</td>";
        $rows .= "<td>{$row['boatType']}</td>";
        $rows .= "<td>{$row['boatEngine']}</td>";
        $rows .= "<td>{$row['boatLength']}</td>";
        $rows .= "<td>{$row['boatWidth']}</td>";
        $rows .= "<td>{$row['ownerName']}</td>";
        $rows .= "</tr>\n";
    }


    //Print out the result as a HTML table using PHP heredoc
    echo <<<EOD
    <table>
    <tr>
        <th>Position</th>
        <th>Boat Type</th>
        <th>Boat Engine</th>
        <th>Boat Length</th>
        <th>Boat Width</th>
        <th>Owner Name</th>
    </tr>
    $rows
    </table>
EOD;
}

function printPokemonResultsetToHTMLTable($res)
{
    $rows = null;
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>{$row['nr']}</td>";
        $rows .= "<td>{$row['name']}</td>";
        $rows .= "<td>{$row['type']}</td>";
        $rows .= "<td>{$row['weight']}</td>";
        $rows .= "<td>{$row['height']}</td>";
        $rows .= "</tr>\n";
    }

    // Print out the result as a HTML table using PHP heredoc
    echo <<<EOD
    <table>
    <tr>
        <th>Nr</th>
        <th>Name</th>
        <th>Type</th>
        <th>Weight (kg)</th>
        <th>Height (m)</th>
    </tr>
    $rows
    </table>
EOD;
}
