<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Địa chỉ email của bạn
    $to = 'job.quocminh@gmail.com';
    
    // Chủ đề email
    $subject = 'New message from your website';

    // Nội dung email
    $email_content = "Name: $fullname\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Gửi email
    if (mail($to, $subject, $email_content)) {
        // Hiển thị thông báo gửi email thành công
        echo 'Your message has been sent successfully. We will get back to you soon.';
    } else {
        // Hiển thị thông báo nếu gửi email không thành công
        echo 'Email could not be sent.';
    }
}
?>
