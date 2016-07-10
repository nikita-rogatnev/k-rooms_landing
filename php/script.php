<?
    $to = "KListov@gmail.com";
    $subject = "Регистрация на Party Went Wrong";
    $message = "<html><head><title>'.$subject.'</title></head>";
    $message .= "<body><p>Имя: ".$_POST['name']."</p><p>Email: ".$_POST['email']."</p><p>Квест: Party Went Wrong</p></body></html>";
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <".$to.">\r\n";

    mail($to, $subject, $message, $headers);
?>
