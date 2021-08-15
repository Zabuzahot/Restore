<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1733698419:AAHdWoAaPhpk53_JowZApS6O0T06GN65Bno";

//Сюда вставляем chat_id
$chat_id = "-586091828";
$txt = "";
//Определяем переменные для передачи данных из нашей формы
    $text = ($_POST['text']);
    $phone = ($_POST['phone']);
    $model = ($_POST['model']);
    $date = ($_POST['date']);
    $text1 = ($_POST['text1']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $text,
        'Телефон:' => $phone,
        'Колво-человек:' => $model,
        'Дата и время:' => $date,
        'Пожелания:' => $text1
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
   

?>