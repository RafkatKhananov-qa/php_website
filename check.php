<?php
  // print_r($_POST);
  $email = $_POST["email"];
  $message = $_POST["message"];

  $error = '';
  
  // Проверка email
  if (trim($email) == '') {
    $error = 'Введите ваш email';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = 'Введите корректный email';
  } else if (trim($message) == '') {
    $error = 'Введите само сообщение';
  } else if (strlen($message) < 10) {
    $error = 'Сообщение должно быть более 10 символов';
  }

  // Проверка на наличие ошибки
  if (!empty($error)) { 
    echo $error;  // Выводим сообщение об ошибке
    exit;         // Выходим из скрипта
  }
  // Здесь может быть логика для обработки корректных данных (например, отправка email)
  echo "Сообщение успешно отправлено!"; // Успешное сообщение

  $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

  mail("rafkat.khananov@mail.ru", $subject, $message, $headers);

  header("Location: /my_project/about.php");


?>
