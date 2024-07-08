<?php
    include "header.php";
?>

    
    <div class="active">
        <h2> بيانات الحجز الالعاب</h2>
        <div class="u">
            <br>
            <table class="table table-striped  table-hover ggg" align="center">
                <tr class="hhh">
                    <td>الى تاريخ</td>
                    <td>من تاريخ</td>
                    <td>كود اللعبة </td>
                    <td>كود العضو </td>
                    <td>رقم الحجز </td>
                </tr>
                <?php
                include "con_n.php";

                $sql = "select * from `member-games`";
                $query = mysqli_query($con, $sql);
                $ress = mysqli_fetch_all($query, MYSQLI_ASSOC);
                foreach ($ress as $memmbers) {?>
                    <tr>
                    <td><?php echo $memmbers["to-date"] ?></td>
                    <td><?php echo $memmbers["from-date"] ?></td>
                    <td><?php echo $memmbers["id-game"] ?></td>
                    <td><?php echo $memmbers["id-mem"] ?></td>
                    <td><?php echo $memmbers["id-game-member"] ?></td>
                    </tr>
                    <?php }?>
            </table>
        </div>
    </div>
    

<?php
    include "footer.php";
?>