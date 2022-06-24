<?php
    require 'functions.php';
    $connection = dbconnect();
     
    $result = $connection->query("SELECT * FROM `plaatsen`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time()?>">
    <title>Tourist Highlights</title>
</head>
<body>
<section>
                <div class="container">
                    <div class="row">
                        <h1>The best travel spots to visit!</h1>
                    <?php foreach($result as $row): ?>
                        <div class="places-list__place">
                            <h3><?php echo $row['titel']?></h3>
                            <figure class="places-list__photo" style="background-image: url(images/<?php echo $row['foto'];?>)" > </figure>
                            <p><?php echo $row['beschrijving'] ?></p>
                            <a class="places-list__link" target="blanck" href="contact.php">Contact Me</a>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </section>
</body>

</html>
details_image