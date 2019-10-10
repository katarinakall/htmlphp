<main>
    <form method="post" action="post-process.php">
        <fieldset>
            <legend>Posta ett meddelande på sidan!</legend>
            <label for="message">Your message: </label>
            <textarea name="message"></textarea>
            <input type="submit" name="post" value="Posta">
        </fieldset>
    </form>
</main>
<?php
$message = $_SESSION["flashmessage"] ?? null;

// Clear the message, it should only be used once
$_SESSION["flashmessage"] = null;

// Return if no message
if (!$message) {
    return;
}

?><div class="flashmessage">
    <p><?= $message ?></p>
</div>
