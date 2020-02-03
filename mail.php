<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$token = "YourToken";

$chat_id = "YourChatId";
$arr = [
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
];

foreach ($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen(
    "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}",
    "r"
);

if (!$sendToTelegram) {
    echo 'Ошибка. Сообщение не отправлено!'.$sendToTelegram->ErrorInfo;
} else {
    echo 'Спасибо за отправку вашего сообщения!';
}
