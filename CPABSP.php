<?php
    $pageTitle = "البيانات الشخصية";
    include "header.php";
    if (!isset($_SESSION["type_member"])) {
        header("Location: CHOBSP.php");
        exit();
    }
    if (!isset($_SESSION["national"])) {
        header("Location: CHOBSP.php");
        exit();
    }
    
?>

<div class="div">
    <div>
        <h2>البيانات الشخصيه</h2>
        <p>الاسم : <?php echo $_SESSION["name-mem"]; ?></p>
        <p>الايميل : <?php echo  $_SESSION["email"] ?></p>
        <p> كلمة السر : <?php echo $_SESSION["national"]; ?></p>
        <hr>
        <p>
            تعديل بيانات العضو
            <a href="CUPBSP.php">
                <i class="fa-solid fa-chevron-up"></i>
            </a>
        </p>
        <hr>
        <p>
            حذف بيانات العضو
            <a href="CDEBSP.php">
                <i class="fa-solid fa-chevron-up"></i>
            </a>
        </p>
        
    </div>
</div>




<?php 
    include "footer.php";
?>