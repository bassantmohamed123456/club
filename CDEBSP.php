
<?php
  $pageTitle = "حذف بيانات العضو";
  include "header.php";
  include "C_MD_BSP.php";
?>
  <div class="login-1">

    <img class="img" src="image/logo.jpg">
    <form class="gg" action="C_MD_BSP.php" method="post">
      <h2> حذف بيانات العضو</h2>
      <input type="text" name="id-mem" placeholder="كودالعضو" value="<?php if (isset($_GET["delete_id"])) { echo $res["id-mem"]; } ?>">
      <input type="text" name="name-mem" placeholder="اسم العضو" value="<?php if (isset($_GET["delete_id"])) { echo $res["name-mem"]; } ?>">
      <div>
        <button type="submit" name="delete">حذف</button>

      </div>
    </form>
  </div>
<?php
  include "footer.php";
?>