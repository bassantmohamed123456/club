<?php
    
    if(isset($_POST["login"])) {
        include "con_n.php";
        $id_mem = $_POST["id_mem"];
        $national = $_POST["national"];
        $sql = "SELECT * FROM `member` WHERE `id-mem`='$id_mem' AND `national`='$national'";

        $query = mysqli_query($con,$sql);
        $res = mysqli_fetch_assoc($query);

        if($res) {
            session_start();
            $_SESSION["id-mem"] = $res["id-mem"];
            $_SESSION["name-mem"] = $res["name-mem"];
            $_SESSION["email"] = $res["email"];
            $_SESSION["national"] = $res["national"];
            $_SESSION["date"] = $res["date"];
            $_SESSION["address-mem"] = $res["address-mem"];
            $_SESSION["phone-mem"] = $res["phone-mem"];
            $_SESSION["gender"] = $res["gender"];
            $_SESSION["type_member"] = $res["type_member"];
            header("location: CHOBSP.php?loginSuccess");
            exit();
        } else {
            header("location: CLOBSP.php?loginFailed");
            exit();
        }

    }
?>