
    <?php
    $pageTitle = "اظهار بيانات العضو";
    include "header.php";
    ?>
    <div class="active">
        <h2>اظهار بيانات العضو</h2>
        <div class="u">
            <p>بيانات العضو</p>
            <br>
            <table class="table table-striped  table-hover ggg" align="center">
                <tr class="hhh">
                    <td>كود العضو </td>
                    <td>اسم العضو </td>
                    <td>الايميل </td>
                    <td>الرقم القومى</td>
                    <td>العنوان</td>
                    <td>النوع</td>
                    <td>تاريخ الاشتراك</td>
                    <td></td>
                </tr>
                <?php 
                    include "C_MS_BSP.php";
                    foreach ($res as $members) {?>
                    <tr>
                        <td><?php echo $members["id-mem"] ?></td>
                        <td><?php echo $members["name-mem"] ?></td>
                        <td><?php echo $members["email"] ?></td>
                        <td><?php echo $members["national"] ?></td>
                        <td><?php echo $members["address-mem"] ?></td>
                        <td><?php echo $members["gender"] ?></td>
                        <td><?php echo $members["date"] ?></td>
                        <td>
                            <a href="CUPBSP.php?update_id=<?php echo $members["id-mem"];?>" class="btn btn-outline-success rounded-pill">تعديل</a>
                            <a href="CDEBSP.php?delete_id=<?php echo $members["id-mem"];?>" class="btn btn-outline-danger btn-sm rounded-pill">حذف</a>
                        </td>
                    </tr>
                    <?php }?>
            </table>
            </form>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
