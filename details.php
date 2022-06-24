<?php
    require 'functions.php';
    $connection = dbconnect();
    
    if( !isset( $_GET['id']) ){
        echo "De ID is niet gezet";
        exit;
    }

    $id = $_GET['id'];
    $check_int = filter_var($id, FILTER_VALIDATE_INT);
    if($check_int == false){
        echo"Dit is geen getal";
        exit;
    }

    $statement = $connection->prepare('SELECT * FROM `plaatsen` WHERE id=?');
    $params = [$id];
    $statement->execute($params);
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    $result = $connection->query("SELECT * FROM `plaatsen`")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time()?>">
    <title></title>
</head>
<body>

<figure class="details_image" style="background-image: url(images/<?php echo $row['foto'];?>)"></figure>

</body>
</html>