<?php
    session_start();
    if (!empty($_SESSION["type_member"])) {
        $type_member = $_SESSION["type_member"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle;?></title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="body">
    <!-- start header -->
        <header class="header">
        <div class="right">
            <img src="image/logo.jpg" alt="" class="img">
            <h1>النادى الاهلى</h1>
        </div>
        <div class="left">
            <nav>
            <ul>
                <li><a href="CHOBSP.php">الرئيسية</a></li>
                <li><a href="CGABSP.php">الالعاب</a></li>
                <li><a href="CSTBSP.php">الملاعب</a></li>
                <li><a href="CCOBSP.php">الشكاوى</a></li>
            </ul>
            </nav>
        </div>
        <div>
            
        <?php
        
            if (isset($_SESSION) && isset($type_member)) { ?>
                <a href="C_OU_BSP.php" style="text-decoration: none;">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            <?php } ?>
            <?php
            if (isset($_SESSION) && isset($type_member) && $type_member == 2) { ?>
                <a href="CPABSP.php" class="btn text-white btn-outline-info mb-3" style="margin-right: 30px;">
                     البيانات الشخصية
                </a>
            <?php } ?>
            <?php
            if (isset($_SESSION) && isset($type_member) && $type_member == 1) { ?>
                <a href="CSEBSP.php" class="btn text-white btn-outline-info mb-3" style="margin-right: 30px;">
                    لوحة التحكم
                </a>
            <?php } ?>
            <a href="CLOBSP.php" class="icon">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
        </header>
    <!-- end header -->
