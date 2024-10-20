<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على البيانات المرسلة من النموذج
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // إعداد عنوان البريد المرسل إليه (ضع عنوان بريدك هنا)
    $to = "Jomanaabanda41@gmail.com"; // استبدل هذا بعنوان بريدك الحقيقي
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // رسالة البريد
    $fullMessage = "اسم المرسل: " . $name . "\n\n" .
                   "البريد الإلكتروني: " . $email . "\n\n" .
                   "الموضوع: " . $subject . "\n\n" .
                   "الرسالة:\n" . $message;

    // استخدام mail() لإرسال البريد
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "تم إرسال رسالتك بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى لاحقًا.";
    }
}
?>
