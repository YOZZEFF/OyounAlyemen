<?php
require('../includes/header.php');
require('../includes/connectdb.php');
?>

<?php
    if (isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
        $mobile = $_POST['mobile'];
        $from =$_POST['from'];
        $to_country =$_POST['to_country'];
        $to_city= $_POST['to_city'];
        $ship_method =$_POST['shipping_method'];
        $weight =$_POST['weight'];
        $length =$_POST['length'];
        $width=$_POST['width'];
        $height=$_POST['height'];
        $content =$_POST['package_content'];
        $number_of_packages = $_POST['number_of_packages'];
        $notes = $_POST['notes'];
        $errors= array();


if (empty($full_name) OR empty($mobile) OR empty($from) OR empty($to_country) OR empty($to_city) OR empty($ship_method) 
        OR empty($weight) OR empty($length) OR empty($width) OR empty($height) OR empty($content) OR empty($number_of_packages) ) {
          return;
                            



        }else{


            $sql = "INSERT INTO customers(`full_name`,`mobile`,`from`,`to_country`,`to_city`,`ship_method`,`weight`,`length`,`width`,`height`,`content`,`number_of_packages`,`notes`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($connection);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,'sssssssssssss',$full_name,$mobile,$from,$to_country,$to_city,$ship_method,$weight,$length,$width,$height,$content,$number_of_packages,$notes);
                mysqli_stmt_execute($stmt);
                echo'<script>alert("تم ارسال الطلب");
                window.location.href="index.php";

                </script>';





                
            }

                         



        
    }
    }
    ?>




<div class="landpage">
    <img src="../images/booking_background.webp" alt="flight" class="background">
    <div class="form_container">
        <div class="title_form">
            <img src="../images/logo.webp" alt="logo">
            <div class="title_words">
            <h1 class="noc">عيون اليمن</h1>
            <p>تأكد من ادخال البيانات المطلوبه -</p>
    </div>
</div>

<form  method="POST" action="booking.php" id="f">
  <div class="form_line one">
      <div class="col_1">
    <label> <span> : </span>الاسم  الكامل</label>
    <input type="text"  name="full_name" autofocus  required>
    </div>
<div class="col_2">
    <label><span> : </span>رقم الموبايل</label>
    <input type="text" name="mobile" required>
    </div>
</div>

<div class="form_line two">
    <div class="col_1">
    <label><span> : </span>الوجهه (من)</label>
    <select name="from"  required>
    <option >مصر</option>
    </select>
    </div>
    <div class="col_2">
    <label><span> : </span>الوجهه (إلي)</label>
    <input type="text" name="to_country" required>
    </div>
    <div class="col_3">
    <label><span> : </span>المدينه</label>
    <input type="text" name="to_city" required>
    </div>
</div>

<div class="form_line three">
 <div class="col_1">
  <label><span> : </span>طريقة الشحن</label>
  <select name="shipping_method" required >
    <option >تجارى (بحري) - (جوي) </option>
    <option >شخصي (بحري) - (جوي) </option>
    </select>
    </div>

</div>

<div class="form_line four">
    <div class="col_1">
    <label><span> : </span>الوزن</label>
    <input type="text" name="weight" placeholder=" الوزن(كجم)" required>
    </div>
<div class="col_2">
    <label><span> : </span>الطول</label>
    <input type="text" name="length" placeholder="الطول(سم)" required>
    </div>
<div class="col_3">
    <label><span> : </span>العرض</label>
    <input type="text" name="width" placeholder="العرض(سم)" required>
    </div>
<div class="col_3">
    <label><span> : </span>الارتفاع</label>
    <input type="text" name="height" placeholder="الارتفاع(سم)" required>
    </div>

</div>

<div class="form_line five">
<div class="col_1">
    <label><span> : </span>محتوى الطرد</label>
    <input type="text" name="package_content" required>
        </div>

<div class="col_2">
    <label><span> : </span>عدد الطرود</label>
    <input type="text" name="number_of_packages" required>
        </div>
</div>

<div class="form_line six">
    <div class="col_1">
        <label><span> : </span>ملاحظات</label>
            <textarea name="notes"   type="text" cols="30" rows="10" ></textarea>
            </div>
</div>


<div class="btn_form">
<button type="submit" value="submit" name="submit"   >ارسل الطلب</button>
</div>


</form>
</div>
</div>

</body>
</html>
