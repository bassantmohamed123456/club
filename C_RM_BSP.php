<?php
session_start();
if (!empty($_SESSION["type_member"])) {
    $type_member = $_SESSION["type_member"];
}
include "con_n.php";


if (isset($_POST["add"])) {
    $id = $_POST["id-mem"];
    $name = $_POST["name-mem"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $national=$_POST["national"];
    $member = $_POST["type_member"];
    // كود اضافة العضو
    $insert = "INSERT INTO `member`(`id-mem`, `name-mem`, `email`, `date`, `address-mem`, `phone-mem`, `gender`, `national`, `type_member`) VALUES
    ($id,'$name','$email','$date','$address','$phone','$gender','$national', '$member')";
    mysqli_query($con, $insert);
    header("location: CHOBSP.php");     
} else {
    echo "no add";
}
?>

