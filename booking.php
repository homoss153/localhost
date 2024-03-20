<?php
    require_once("connect.php");
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    $a = date_parse($data['date1']);
    $b = date_parse($data['date2']);

    $c = var_export($a > $b, true);

    if (!$data['name']) {
        echo "Введите имя";
    } else if (!$data['nameP']) {
        echo "Введите имя питомца";
    } else if (!$data['number']) {
        echo "Введите номер телефона";
    } else if (!$data['email']) {
        echo "Введите e-mail";
    } else if (!$data['date1']) {
        echo "Введите дату заезда";
    } else if (!$data['date2']) {
        echo "Введите дату заезда";
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        echo 'email не валидный';
    }else if(!checkdate($a['month'], $a['day'], $a['year']) or !checkdate($b['month'], $b['day'], $b['year'])){
        echo 'Введите валидную дату';
    }else {
        $date1 = $data['date1'];
        $date2 = $data['date2'];
        $name = $data['name'];
        $nameP = $data['nameP'];
        $email = $data['email'];
        $number = $data['number'];
        $id = $data['id_catalog'];
        $req = "INSERT INTO `booking`(`id`, `name`, `name_p`, `nuber`, `email`, `date1`, `date2`, `id_catalog`) VALUES (NULL , '$name', '$nameP', '$number', '$email', '$date1', '$date2', '$id') ";
        $res = mysqli_query($connect, $req);
        echo mysqli_error($connect);
    }


?>