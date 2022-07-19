<?php
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
return (mail('gnedasch2011@yandex.ru', 'Заявка со стилистов', "Имя:$name, телефон: $phone"))
;
?>


