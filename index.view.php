<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header {
            background: grey;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>
<body>

    
    <br>

    <ul>
        <?php foreach($person as $att => $val) : ?>
            <li><strong><?="$att :"; ?></strong> <?=$val ?></li>
        <?php endforeach; ?>

        <pre>
        <?php 
        print_r($person);
        ?>
        </pre>

    </ul>

        <?php

        $str1 = "<div>What does PHP stand for?</div>
        <div>It's a <i>recursive acronym</i>:</div>
        <div>PHP: Hypertext Preprocessor</div>";
        echo $str1;
        ?>



</body>
</html>



