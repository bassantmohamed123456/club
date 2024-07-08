<?php
    include "con_n.php";
    
    
    if (isset($_GET["update_id"])) {
        $id = $_GET["update_id"];
        $sql = "SELECT * FROM `member` WHERE `id-mem` = $id";
        $result = mysqli_query($con, $sql);
        $res = mysqli_fetch_assoc($result);
    }
    if (isset($_POST["update"])) {
        $id = $_POST["id-mem"];
        $name = $_POST["name-mem"];
        $email = $_POST["email"];
        $date = $_POST["date"];
        $address = $_POST["address"];
        // كود update العضو
        $update = "UPDATE `member` SET `id-mem`='$id',`name-mem`='$name',`email`='$email',`date`='$date',`address-mem`='$address' WHERE `id-mem`=$id ";
        $res = mysqli_query($con, $update);
        header("location: CSEBSP.php");
    }    
?> 
