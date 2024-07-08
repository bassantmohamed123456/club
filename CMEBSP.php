
    <?php
        // متغير بحط له قيمه عشان يطبع فى العنوان
        $pageTitle = "تسجيل الاشتراك";
        // بضم صفحة الهيدر للصفحة دى من غير ما اكتب الاكواد تانى
        include "header.php";
    ?>
    <!-- start-member -->
    <!-- css الكلاس بعطى له تنسيقات فى  -->
    <div class="member">
      <!-- h1 : 62 -->
      <!-- h2 عنوان اسم الصفحة بتاعى -->
            <h2>تسجيل الاشتراكات(تسجيل الاعضاء)</h2>
            <!--ا ل عبارة عن نموذج ادخال من خلاله بقدر ابعت البيانات الى انا عوزها لقاعدة البيانات او لصفحه  تانيه form   -->
            <!-- بحط فيه اسم الصفحة الى انا عاوزة البيانات تروح لها او تتسجل فيها  action  ال   -->
            <!-- method:post مش بيظهر البيانات فى شريط البحث وهيا بتتبعت   get عكسها بتظهر البيانات-->
            <form action="C_RM_BSP.php" method="post">
              <!-- وهو صف والصف يتكون من 12 عمود bootstrap  كلاس الرو واخد تنسيقات فى -->
                <div class="row" >
                    <!-- وهو عمود bootstrap كلاس الكول واخد تنسيقات فى ال -->
                    <div class="col">
                      <!-- ده اى البيانات الى هتدخل فيه inpug بتعرف من خلاله   -->
                        <label for="I">كود العضو</label>
                        <!-- حقل ادخال من خلاله بدخل البيانات الى هتتبعت -->
                        <!-- ده نوع البيانات الى هتدخل فى الحقل ده type -->
                        <!-- php ده اسم انا بديه للحقل ده عشان اقدر استخدمه فى  name  -->
                        <!-- دى والاتنين بياخدوا نفس الاسم او الحرف input  بال  label  بحطه عشان اربط ال  id  -->
                        <input type="text" name="id-mem" id="I">
                    </div>
                        <div class="col">
                            <label for="N">اسم العضو</label>
                            <input type="text" name="name-mem" id="N">
                    </div>
                    <div class="col">
                        <label for="E">   الايميل</label>
                        <input type="email" name="email" id="E">
                    </div>
                    <div class="col">
                        <label for="n">الرقم القومى</label>
                        <input type="text" name="national" id="n">
                    </div>
                    <div class="col">
                        <label for="D">تاريح الميلاد</label>
                        <input type="date" name="date" id="D">
                    </div>
                    <div class="col">
                        <label for="T">التليفون</label>
                        <input type="text" name="phone" id="T">
                    </div>
                    <div class="col">
                        <label for="A">العنون</label>
                        <input type="text" name="address" id="A">
                    </div>
                    <div class="label">
                        <label for="M" class="label">ذكر</label>
                        <!-- هنا متكرر عشان يقدر يختار بين الاتنين name  -->
                        <!-- ده قيمه افتراضيه بحطها هنا عشان تقدر ااسجل فى قاعدة البيانات الاختيار الى عاوزاه value -->
                        <input type="radio" name="gender" id="M" class="input" value="male">
                        <label for="F" class="label">انثى</label>
                        <input type="radio" name="gender" id="F" class="input" value="female">
                    </div>
                    <div class="label">
                        <label for="S" class="label">1</label>
                        <!--  1 يدل على انو نوع العضو مدرب او موظف -->
                        <!-- 2 يدل على انو نوع العضو عضو او مشترك -->
                        <input type="radio" name="type_member" id="S" class="input" value="1">
                        <label for="s" class="label">2</label>
                        <input type="radio" name="type_member" id="s" class="input" value="2">
                    </div>
                    <!-- ده زر من خلاله هقدر اسجل بيانات الاعضاء بتاعتى -->
                    <input type="submit" name="add" value="تسجيل الاشتراك" class="button">
                </div>

            </form>

    </div>
    <!-- end-member -->
    <?php
        include "footer.php";
    ?>
