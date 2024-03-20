<?php
    if ($_COOKIE['login'] != 1){
        header('Location: /');
    }
    require_once('connect.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='./pages/admin.css'>
</head>
<body>
    <div class="block-1">
        <?php 
        $req = mysqli_query($connect, 'SELECT * FROM booking');
        foreach ($req->fetch_all() as $value) {
            echo $value[3];
        }

        ?>
    </div>
    
</body>
</html>