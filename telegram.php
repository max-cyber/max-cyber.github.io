<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "1008873416:AAF85LR-umJSMFRtxY5sebc7kLR8qT0G40U";
$chat_id = "-325290915";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);
$txt = '';
foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo '<h1 class="danger">Ошибка</h1>';
}
?>
