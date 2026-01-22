<?php $username = "hassane"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my page <?php echo $username ?></title>
</head>
<body>
    <div>hi my name is <?php echo $username ?></div>
    <div>your score is 1000 points</div>
    <div>score for <?php include("score.php");?></div>
</body>
</html>