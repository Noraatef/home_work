<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    $name = 'Nora';
    $fruit = 'Apple';
    echo '<h1>My name is '. $name .'</h1>';
    echo "<p> I ate 10 {$fruit}s </p>"; // {} تستخدم لتعريف الفاريبل في النص 
    $skills = array('PHP', 'HTML', 'CSS', 'JS');
    ?>
    <ul>
        <?php
        foreach ($skills as $skill) {
            echo "<li>$skill</li>";
        }
        ?><br>
        <?php foreach ($skills as $skill ) : ?>
            <li><?= $skill ?></li>
            <?php endforeach ?>
    </ul>


</body>

</html>