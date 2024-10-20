<?php
// تأكد من تضمين مسار PHPMailer
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// استخدام الـ namespace الخاص بـ PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // إنشاء كائن PHPMailer

try {
    // إعدادات الخادم SMTP لجوجل
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // خادم البريد الخاص بـ Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'jomanaabanda41@gmail.com'; // بريدك الإلكتروني
    $mail->Password = '7656 1763'; // كلمة مرور التطبيق
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // المنفذ

    // إعدادات البريد
    $mail->setFrom('your-email@gmail.com', 'Your Name'); // البريد المرسل
    $mail->addAddress('jomanaabanda41@gmail.com', 'Jumana abanda'); // البريد المرسل إليه
    $mail->addReplyTo('your-email@gmail.com', 'Your Name'); // الرد على البريد

    // المحتوى
    $mail->isHTML(true); // إرسال البريد بصيغة HTML
    $mail->Subject = 'Test Email via PHPMailer'; // عنوان الرسالة
    $mail->Body    = '<h1>This is a test email sent via PHPMailer!</h1>'; // جسم الرسالة
    $mail->AltBody = 'This is a test email sent via PHPMailer!'; // نص الرسالة عند عدم دعم HTML

    // إرسال الرسالة
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
