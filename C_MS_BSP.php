<?php
    include "con_n.php";

    $sql = "select * from `member`";
    $query = mysqli_query($con, $sql);
    $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>