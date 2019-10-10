<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");
?>
<?php if ($_POST["post"] ?? false) :
    $_SESSION["flashmessage"] = $_POST["message"];
    ?>
<output>
    <p>This is the content of the posted form.</p>
    <pre>
        <?= var_dump($_POST) ?>
    </pre>
</output>
<?php endif;

//Redirect
header("Location: post-message.php");
?>
