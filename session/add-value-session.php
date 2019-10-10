<h1>Print the content of $_SESSION</h1>

<p>The content of the PHP varaible <code>$_SESSION</code> is:<p>

<pre>In:
<?= htmlentities(print_r($_SESSION, true)); ?>
<?php
if (!isset($_SESSION["val"])) {
    $_SESSION["val"] = 1;
}
$_SESSION["kaka"] = "mumsig";
$_SESSION["val"] *= 2; ?>
</pre>

<pre>Out:
<?= htmlentities(print_r($_SESSION, true)); ?>
</pre>
