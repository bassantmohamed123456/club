
    <?php
    $pageTitle = "تسجيل الشكاوى";
    include "header.php";
    ?>
    <!-- start com -->
    <div class="com">
        <h2>تسجيل الشكاوى</h2>
        <form action="C_MC_BSP.php" method="post">
            <div class="form">
                <label>كود العضو</label>
                <input class="w" type="text" name="id_mem">
                <label>محتوى الشكوى</label>
                <textarea placeholder="على ان تكون الشكوى واضحة" class="op" name="con_com"></textarea>
            </div>

            <div class="button">
                <input class="ooop" type="submit" value="تسجيل الشكوى" name="com">
            </div>

        </form>
    </div>
    <!-- end com -->
    <?php
    include "footer.php";
    ?>
