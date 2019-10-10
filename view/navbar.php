<?php $uriFile = basename($_SERVER["REQUEST_URI"]); ?>

<nav class="navbar">
    <a class="<?= $uriFile == "me.php" ? "selected" : null ?>" href="me.php">Hem</a>
    <a class="<?= strpos($uriFile, "report-multi.php") !== false ? "selected" : null ?>" href="report-multi.php">Redovisning</a>
    <a class="<?= strpos($uriFile, "multipage.php") !== false ? "selected" : null ?>" href="multipage.php">Multisida</a>
    <a class="<?= $uriFile == "about.php" ? "selected" : null ?>" href="about.php">Om</a>
    <a class="<?= strpos($uriFile, "session.php") !== false ? "selected" : null ?>" href="session.php">Session</a>
    <a class="<?= $uriFile == "contact.php" ? "selected" : null ?>" href="contact.php">Kontakta mig</a>
    <a class="<?= $uriFile == "post-message.php" ? "selected" : null ?>" href="post-message.php">Posta meddelande</a>
    <a class="<?= strpos($uriFile, "jetty.php") !== false ? "selected" : null ?>" href="jetty.php">Jetty</a>
    <a class="<?= $uriFile == "search.php" ? "selected" : null ?>" href="search.php">Sök</a>
</nav>
