
    <?php
    $pageTitle = "حجز الالعاب";
    include "header.php";
    include "con_n.php";
        if (isset($_POST["reservation-game"])) {
            $id_mem = $_POST["id-mem"];
            $id_game = $_POST["id-game"];
            $from_date = $_POST["from-date"];
            $to_date = $_POST["to-date"];
            $insert = "INSERT INTO `member-games`(`id-mem`, `id-game`, `from-date`, `to-date`) VALUES ('$id_mem','$id_game','$from_date','$to_date')";
            mysqli_query($con, $insert);
            header("location: CINBSP.php");
        }
    ?>

    <div class="game-res">
        <h2>حجز الألعاب</h2>
        <div>
            <form action="CRGBSP.php" method="post">
                <div class="right">
                    <label>كود العضو </label>
                    <input type="text" name="id-mem">
                    <label>كود اللعبة</label>
                    <input class="form-control" list="datalistOptions" name="id-game"  style="margin-right: 29%;" placeholder="كود اللعبة">
                    <datalist id="datalistOptions">
                    <option value="102030">كرة القدم </option>
                    <option value="102040">كرة السلة </option>
                    <option value="102050">السباحة </option>
                    <option value="102060">التنس </option>
                    <option value="102070">اسكواش </option>
                    <option value="102080">الريشة</option>
                    </datalist>
                </div>
                <div class="left">
                    <label>من تاريخ الحجز </label>
                    <input type="date" name="from-date">
                    <label>الى تاريخ الحجز</label>
                    <input type="date" name="to-date">
                </div>
                <button type="submit" name="reservation-game">حجز</button>
            </form>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
