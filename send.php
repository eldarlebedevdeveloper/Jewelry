<?php
$msgs = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $token = "2129947528:AAEA0Sn_vRcR-3ATOVg_tYag_yBOwZQ_PZ0";
  $chat_id = "-750372731";

  if (!empty($_POST['user-name']) && !empty($_POST['user-phone'])) {
    $bot_url = "https://api.telegram.org/bot{$token}/";

    if (isset($_POST['user-name'])) {
      if (!empty($_POST['user-name'])) {
        $name = "Name: " . strip_tags($_POST['user-name']) . "%0A";
      }
    }

    if (isset($_POST['user-phone'])) {
      if (!empty($_POST['user-phone'])) {
        $telegram = "Phone: " . strip_tags($_POST['user-phone']) . "%0A";
      }
    }

    if (isset($_POST['user-message'])) {
      if (!empty($_POST['user-message'])) {
        $message = "Message: " . strip_tags($_POST['user-message']) . "%0A";
      }
    }
    // Формируем текст сообщения
    $txt = $name . $telegram . $message;
    $sendTextToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");
    if ($output && $sendTextToTelegram) {
      $msgs['okSend'] = 'Your request has been successfully accepted. We will contact you shortly!';
      echo json_encode($msgs);
    } elseif ($sendTextToTelegram) {
      $msgs['okSend'] = 'Your request has been successfully accepted. We will contact you shortly!';
      echo json_encode($msgs);
      return true;
    } else {
      $msgs['err'] = 'Error. Message not sent!';
      echo json_encode($msgs);
      die('Error. Message not sent!');
    }
  } else {
    $msgs['err'] = 'Error. You did not fill in all required fields!';
    echo json_encode($msgs);;
  }
} else {
  header("Location: /");
}
