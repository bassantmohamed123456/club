
    <?php
        $pageTitle = "تعديل البيانات";
        include "header.php";
        include "C_MU_BSP.php";
    ?>

        <div class="update">
            <h2>تعديل بيانات العضو</h2>
            <form action="C_MU_BSP.php" method="post">
                <div style="text-align: center;">
                    <label for="" class="top-1">كود العضو </label>
                    <input type="text" name="id-mem" value="<?php if (isset($_GET["update_id"])) { echo $res["id-mem"]; } ?>">
                </div>
                <div class="top">
                    <label for="" class="top-1">اسم العضو </label>
                    <input type="text" name="name-mem" value="<?php if (isset($_GET["update_id"])) { echo $res["name-mem"]; } ?>">
                    <label for="" class="bb"> البريد الإلكتروني</label>
                    <input type="email" name="email" value="<?php if (isset($_GET["update_id"])) { echo $res["email"]; } ?>">
                </div>
                <div class="bottom"> 
                    <label for="">عنوان العضو</label>
                    <input type="text" name="address" value="<?php if (isset($_GET["update_id"])) { echo $res["address-mem"]; } ?>">
                    <label for="" class="bottom-1">تاريخ الاشتراك</label>
                    <input type="text" name="date" value="<?php if (isset($_GET["update_id"])) { echo $res["date"]; } ?>">
                </div>
                <input type="submit" value="تعديل" name="update" class="button">
            </form>
        </div>

    <?php 
        include "footer.php";
    ?>
