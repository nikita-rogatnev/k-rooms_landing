<?
    $to = "KListov@gmail.com";
    $subject = "Регистрация на Party Went Wrong";
    $message = "<html><head><title>'.$subject.'</title></head>";
    $message .= "<body><p>Имя: ".$_POST['name']."</p><p>Email: ".$_POST['email']."</p><p>Квест: Party Went Wrong</p></body></html>";
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <".$to.">\r\n";

    mail($to, $subject, $message, $headers);


    $to_user = $_POST['name'];
    $subject_user = "Party Went Wrong discount";
    $message_user = "<html><head><title>'.$subject_user.'</title></head>";
    $message_user .= "<body><p>Dear ".$_POST['name'].", Thank you for showing interest in our game. At the moment we are under construction. But because you are one of the first to show your interest, we are giving you a 10% discount when you come to play “party went wrong” quest before 1 December 2016. Just bring this email. We will let you know when we will lock all the doors.</p></body></html>";
    $headers_user  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers_user .= "From: <".$to.">\r\n";

    mail($to_user, $subject_user, $message_user, $headers_user);
?>
