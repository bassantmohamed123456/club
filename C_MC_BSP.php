<?php

include "con_n.php";

if (isset($_POST["com"])) {
    $id_mem = $_POST["id_mem"];
    $con_com = $_POST["con_com"];
    $sql = "INSERT INTO `complaints`(`con-com`, `id-mem`) VALUES ('$con_com','$id_mem')";
    mysqli_query($con , $sql);
    header("location: CHOBSP.php");
}
?>