<?php
    $pageTitle = "تسجيل الدخول";
    include "header.php";
?>
    <div class="login">
        <?php  
            if(isset($_GET["loginFailed"])) {
        ?>
        <div class="alert alert-danger my-2">الاسم او كلمة المرور خطا </div>
        <?php }?>
        
        <form action="C_PW_BSP.php" method="post">
            <div>
                <h2>تسجيل الدخول </h2>
                <input type="text" placeholder="كود العضوية" name="id_mem">
                <input type= "password"  placeholder="كلمة السر" name="national">
            </div>
            <div>
                <p class="p"><a href="CMEBSP.php">مشترك جديد</a></p>
            </div>
            <button type="submit" name="login"> مشترك قديم</button>
        </form>
    </div>

