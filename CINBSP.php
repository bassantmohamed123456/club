
    <?php
    $pageTitle = "الفاتورة";
        include "header.php";
        include "con_n.php";
    if (isset($_POST["invoice-game"])) {
    $id_mem = $_POST["id-mem"];
    $name = $_POST["name-mem"];
    $date = $_POST["date"];
    $id_game = $_POST["id-game"];
    $price = $_POST["price"];
    // insert
    $insert = "INSERT INTO `invoice`( `name-mem`, `date-invoice`, `id-mem`, `id-game`, `price`) VALUES ('$name', '$date', '$id_mem', '$id_game', '$price')";
    mysqli_query($con, $insert);
    header("location: CINBSP.php");
    }

    ?>
    <!-- start-invoice -->
    <div class="home" >
        <h2>ادخل بيانات الفاتورة</h2>
        <form action="CINBSP.php" method="post">
            <div class="card-nu icon-rel">
                <label>كود العضو</label>
                <input type="text" placeholder="ادخل الكود" name="id-mem">
                <i class="fas fa-user"></i>
            </div>
            <div class="card-nu icon-rel">
                <label>اسم العضو</label>
                <input type="text" placeholder="ادخل الاسم" name="name-mem">
                <i class="fas fa-user"></i>
            </div>
            <div class="card-item icon-rel">
                <div class="card-data">
                    <label>تاريخ اصدار الفاتورة</label>
                    <input type="date" class="input" placeholder="00/00" name="date">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div class="card-data icon-rel">
                    <label>كود اللعبة</label>
                    <input class="form-control input" list="datalistOptions" name="id-game" placeholder="كود اللعبة">
                    <datalist id="datalistOptions">
                        <option value="102030">كرة القدم </option>
                        <option value="102040">كرة السلة </option>
                        <option value="102050">السباحة </option>
                        <option value="102060">التنس </option>
                        <option value="102070">اسكواش </option>
                        <option value="102080">الريشة</option>
                        <option value="10407020">ملعب كرة السلة</option>
                        <option value="10506020">ملعب كره القدم</option>
                        <option value="20306050">ملعب التنس</option>
                    </datalist>
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            <div class="card-nu icon-rel">
                <label>الفاتورة</label>
                <input type="text" placeholder="السعر" name="price">
            </div>
            <button class="btn" name="invoice-game">طباعة</button>
        </form>
    </div>
    <!-- end-invoice -->
    <?php
        include "footer.php";
    ?>

