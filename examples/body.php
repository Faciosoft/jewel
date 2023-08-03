<?php
    $numbers = [];

    for($i = 0; $i < 10; $i++) $numbers[] = random_int(0, 100);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $cms->IncludeClientComponent ('Topbar'): ?>

    <?php foreach($numbers as $number): ?>
        <h1>Your number is: <?php echo $number; ?> doubled it is: <?php echo $number*2; ?> </h1>
        <h2>Facts about your number: </h2>

        <p>
            Number <?php echo $number; ?> is:
            <?php if($number % 2 === 0): ?> even <?php elseif($number === 50): ?> half of 100 <?php else: ?> odd <?php endif; ?>

        </p>
    <?php endforeach; ?>

    <?php for ($i = 0; $i < 10; $i++): ?>
        <?php echo $i; ?> <br>
    <?php endfor; ?>

    <?php while (false): ?>
        test
    <?php endwhile; ?>
</body>
</html>