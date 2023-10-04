
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "aleycskn47@gmail.com"; // E-postanın gönderileceği adres
    $subject = "Yeni İletişim Mesajı";
    $mailBody = "Ad: $name\nE-posta: $email\nMesaj: $message";
    
    if ( mail($to, $subject, $mailBody)) {
        echo "Mesajınız gönderildi, teşekkür ederiz!";
    } else {
        echo "Mesajınız gönderilirken bir hata oluştu.";
    }
}
?>