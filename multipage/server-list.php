<h1>The lenght of each values in the $_SERVER array</h1>
<?php $maxLength = 0; ?>
<ul>
<?php foreach ($_SERVER as $key => $value) : ?>
    <li><?= htmlentities($key); ?> <?= htmlentities(strlen($value)); ?></li>
    <?php if ($maxLength < strlen($value)) {
        $maxLength = strlen($value);
        $maxKey = $key;
    }?>
<?php endforeach; ?>
</ul>

<P>The longest value was obtained in <?= htmlentities($maxKey); ?> and was <?= htmlentities($_SERVER[$maxKey]); ?></p>
