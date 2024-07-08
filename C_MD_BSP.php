<?php 
    include "con_n.php";

    if(isset($_GET["delete_id"])) {
        $id = $_GET["delete_id"];
        $sql = "SELECT * FROM `member` WHERE `id-mem` = $id";
        $result = mysqli_query($con,$sql);
        $res = mysqli_fetch_assoc($result);
    }
    if (isset($_POST["delete"])) {
        $id_mem = $_POST["id-mem"];
        $name = $_POST["name-mem"];
        // كود delete العضو
        $delete = "DELETE FROM `member` WHERE `id-mem`=$id_mem";
        $res = mysqli_query($con, $delete);
        header("location: CSEBSP.php");
    }    

?>