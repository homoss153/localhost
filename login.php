<?php
    if (isset($_POST)) {
        if ($_POST['login'] == 'admin'){
            setcookie("login", "1", time()+20*24*60*60);
            header("Location: admin.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/login.php">
        <p>Логин</p>
        <input name="login"><br>
        <p>Пароль</p>
        <input name="pasw"><br>
        <?php
            if ($_POST['login'] != 'admin'){
                echo 'Неверный данные <br>';
            }
        ?>
        <input type="submit">
    </form>
</body>
</html>