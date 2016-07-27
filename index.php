 <?php
$msg = 'Имя: '.$_POST['nameplace']."\r\n E-mail: ".$_POST['nameplace']."\r\n Телефон: ".$_POST['phonenumber'];
mail("h.serge@mail.ru", "Новая заявка!", $msg);
echo '<div class="thankyou">Заявка успешно отправлена!</div>';
?>