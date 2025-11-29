<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "danisdiantra@gmail.com";
    $subject = "Pesan dari Portfolio";
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan');window.location='index.php';</script>";
    }
}
?>