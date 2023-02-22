<?php

/* https://api.telegram.org/bot5864009156:AAH5eUcax7HpjBq6wZV8r3BCrc0Yd3m7wgY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];

$token = "5864009156:AAH5eUcax7HpjBq6wZV8r3BCrc0Yd3m7wgY";
$chat_id = "-604127482";
$arr = array(
  'Імя: ' => $name,
  'email: ' => $phone,
  'Повідомленяя' => $text
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>