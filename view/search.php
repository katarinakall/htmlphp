<?php
$db = connectToDatabase($dsnPokemon);

// Get incoming from search form
$search = isset($_GET['search'])
    ? $_GET['search']
    : null;
?>
<main>
    <form>
        <fieldset>
            <legend>Pokémonsök</legend>
            <input type="search" name="search" placeholder="Enter a substring to search for, use % as wildcard.">
            <input type="submit" value="Search">
        </fieldset>
    </form>
    <div class="links">
        <a href='?page=search&term=all'>Show all pokémons</a>
        <?php
        if (isset($_GET['term']) == true) {
            $sql = "SELECT * FROM pokemon";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            printPokemonResultsetToHTMLTable($res);
        }
        if (isset($_GET['search']) == true) {
            // Prepare the SQL statement
            $sql = "SELECT * FROM pokemon WHERE Name LIKE ?";
            $stmt = $db->prepare($sql);
            $params = [$_GET['search']];
            $stmt -> execute($params);
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            printPokemonResultsetToHTMLTable($res);
        }
        ?>
    </div>
</main>
