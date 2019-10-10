<h1>Information about the content in the $_SERVER array</h1>

<p>There are <?= htmlentities(sizeof($_SERVER)); ?> entries in the array for $_SERVER.<p>

<p>The first key in the $_SERVER array is: <?= htmlentities(key($_SERVER)); ?> and the value is: <?= htmlentities(array_shift($_SERVER)); ?></p>

<?php end($_SERVER); ?>
<p>The last key in the $_SERVER array is: <?= htmlentities(key($_SERVER)); ?> and the value is: <?= htmlentities(array_pop($_SERVER)); ?></p>
