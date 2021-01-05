<?php require('partials/head.php'); ?>

<!--

<h1>My Tasks</h1>

<ul>
    <?php foreach ($tasks as $val) : ?>
        <li>
            <?php if ($val->completed) : ?>
                <strike> <?= $val->description; ?></strike>
            <?php else: ?>
                <?= $val->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

-->


<h1>Submit your Name</h1>

<form method="POST" action="/names">

    <input name="name"></input>

    <button type="submit">Submit</button>   

</form>




<?php require('partials/footer.php'); ?>




