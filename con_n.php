<!-- code connect database -->
<?php
    $host="localhost";
    $user="root";
    $pass_user="";
    $db="club";
    $con=mysqli_connect($host,$user,$pass_user,$db);
    // استخدام تعيين رمز الترميز لدعم وقبول البيانات باللغة العربية من php لقاعدة البيانات
    $con->set_charset("utf8");
?>