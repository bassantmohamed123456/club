
    <?php
    $pageTitle = "حجز الملاعب";
    include "header.php";
    include "con_n.php";

    if (isset($_POST["reservation-sta"])) {
        $id_mem = $_POST["id-mem"];
        $id_sta = $_POST["id-sta"];
        $from_date = $_POST["from-date"];
        $to_date = $_POST["to-date"];
        $price = $_POST["price"];
        // code update
        $update = "UPDATE `member` SET `id-stad`='$id_sta', `from-date`='$from_date', `to-date`='$to_date',`price-stad`='$price' WHERE `id-mem`=$id_mem";
        $res = mysqli_query($con, $update);
        header("location: CINBSP.php");
    }
    ?>

    <div class="geam">
        <div class="game-1">
            <h2>حجز الملاعب</h2>
            <form action="CRSBSP.php" method="post">
                <label>كود الملعب</label>
                <input list="datalistOptions" name="id-sta" placeholder="كود الملعب">
                    <datalist id="datalistOptions">
                        <option value="10407020">ملعب كرة السلة</option>
                        <option value="10506020">ملعب كره القدم</option>
                        <option value="20306050">ملعب التنس</option>
                    </datalist>
                <label for="">كود العضو</label>
                <input type="text" name="id-mem">
                <label for="">تاريخ الحجز</label>
                <input type="date" class="date-re" name="from-date">
                <input type="date" class="date-re" name="to-date">
                <label for="">ثمن الحجز</label>
                <input type="text" class="res" name="price">
                
                    <input type="submit" value="تأكيد" class="button" name="reservation-sta">
                
                
            </form>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>