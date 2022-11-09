<?php
$work = [
    'Graphic Designer' => 'Jun 2010 - Mar 2012',
    'Web Developer' => 'Mar 2012 - Dec 2014',
    'Front End Developer' => 'Jan 2015 - Current'
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title> Опыт работы </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css">
</head>


<body class="w3-light-grey">

  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <div class="w3-row-padding">
    <h1>Опыт работы</h1>

<?php foreach ($work as $workName => $workValue) : ?>
    <h5 class="w3-opacity">
        <p>
            <?php
                echo ucfirst($workName);
            ?>
        </p>
    </h5>
        <div class="w3-container">
            <div class="w3-light-grey w3-round-xlarge w3-small">
                <?php
                    echo $workValue;
                ?>
<hr>
            </div>
        </div>

<?php endforeach; ?>

</body>
</html>

