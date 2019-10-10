<h1>Destroy the $_SESSION variable</h1>
<?php sessionDestroy(); ?>
<pre>The session is destroyed:
<?= htmlentities(print_r($_SESSION, true)); ?>
</pre>
