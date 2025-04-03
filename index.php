<?php
// هنا يمكنك إضافة الكود الخاص بالاتصال بقاعدة البيانات
include  db.php ; 

// إذا تم إرسال النموذج
if ($_SERVER[ REQUEST_METHOD ] ==  POST ) {
    $username = $_POST[ username ];
    $password = $_POST[ password ];

    // استعلام للتحقق من المستخدم
    $sql = "SELECT * FROM users WHERE username =  $username  AND password =  $password ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "تم تسجيل الدخول بنجاح!";
        // يمكنك إعادة توجيه المستخدم إلى صفحة أخرى بعد تسجيل الدخول
    } else {
        echo "اسم المستخدم أو كلمة المرور غير صحيحة!";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <!-- ربط ملف CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>تسجيل الدخول</h2>
<form method="POST" action="index.php">
    <label for="username">اسم المستخدم:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">كلمة المرور:</label>
    <input type="password" id="password" name="password" required>
    
    <button type="submit">تسجيل الدخول</button>
</form>

</body>
</html>
