<h1>Print the content of $_SESSION</h1>

<p>The content of the PHP varaible <code>$_SESSION</code> is:<p>

<pre>
<?= htmlentities(print_r($_SESSION, true)); ?>
</pre>
