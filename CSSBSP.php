<?php
    include "header.php";
?>

<div class="active">
        <h2> بيانات الحجز الملاعب</h2>
        <div class="u">
            <br>
            <table class="table table-striped  table-hover ggg" align="center">
                <tr class="hhh">
                    <td>الى تاريخ</td>
                    <td>من تاريخ</td>
                    <td>كود الملعب </td>
                    <td>كود العضو </td>
                    <td>رقم الحجز </td>
                </tr>
                <?php
                include "con_n.php";

                $sql = "SELECT `id-mem`, `id-stad`, `from-date`, `to-date`, `price-stad` FROM `member` WHERE 1";
                $query = mysqli_query($con, $sql);
                $ress = mysqli_fetch_all($query, MYSQLI_ASSOC);
                foreach ($ress as $stad) {?>
                    <tr>
                    <td><?php echo $stad["to-date"] ?></td>
                    <td><?php echo $stad["from-date"] ?></td>
                    <td><?php echo $stad["price-stad"] ?></td>
                    <td><?php echo $stad["id-mem"] ?></td>
                    <td><?php echo $stad["id-stad"] ?></td>
                    </tr>
                    <?php }?>
            </table>
        </div>
    </div>

<?php
    include "footer.php";
?>