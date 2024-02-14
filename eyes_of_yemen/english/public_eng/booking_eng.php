<?php
require('../includes_eng/header_eng.php');
require('../../includes/connectdb.php');
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


if (empty($full_name) OR empty($mobile) OR empty($from) OR empty($to_country) OR empty($to_city) OR empty($ship_method) 
        OR empty($weight) OR empty($length) OR empty($width) OR empty($height) OR empty($content) OR empty($number_of_packages) ) {
            return false;

        }else{


            $sql = "INSERT INTO customers(`full_name`,`mobile`,`from`,`to_country`,`to_city`,`ship_method`,`weight`,`length`,`width`,`height`,`content`,`number_of_packages`,`notes`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($connection);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,'sssssssssssss',$full_name,$mobile,$from,$to_country,$to_city,$ship_method,$weight,$length,$width,$height,$content,$number_of_packages,$notes);
                mysqli_stmt_execute($stmt);
                 echo'<script>alert("Request sent");
                window.location.href="index.php";

                </script>';

                        


            }
        
    }
    }
    ?>




<div class="landpage">
    <img src="../../images/booking_background.webp" alt="flight" class="background">
    <div class="form_container">
        <div class="title_form">
            <img src="../../images/logo.webp" alt="logo">
            <div class="title_words">
            <h1 class="noc">Oyoun Al-Yemen</h1>
            <p>-Make sure to enter the required data</p>
    </div>
</div>

<form  method="POST" action="booking_eng.php" id="f">
  <div class="form_line one">
      <div class="col_1">
    <label>Full Name : </label>
    <input type="text"  name="full_name" autofocus  required>
    </div>
<div class="col_2">
    <label>mobile : </label>
    <input type="text" name="mobile" required>
    </div>
</div>

<div class="form_line two">
    <div class="col_1">
    <label>From : </label>
    <select name="from"  required>
    <option >Egypt</option>
    </select>
    </div>
    <div class="col_2">
    <label>To (country): </label>
    <input type="text" name="to_country" required>
    </div>
    <div class="col_3">
    <label>City : </label>
    <input type="text" name="to_city" required>
    </div>
</div>

<div class="form_line three">
 <div class="col_1">
  <label>shipping method : </label>
  <select name="shipping_method" required >
    <option >Commercial (Sea - Air)</option>
    <option >Personal (Sea - Air)</option>
    </select>
    </div>

</div>

<div class="form_line four">
    <div class="col_1">
    <label>Weight : </label>
    <input type="text" name="weight" placeholder="weight(kg)" required>
    </div>
<div class="col_2">
    <label>Length : </label>
    <input type="text" name="length" placeholder="length(cm)" required>
    </div>
<div class="col_3">
    <label>Width : </label>
    <input type="text" name="width" placeholder="width(cm)" required>
    </div>
<div class="col_3">
    <label>Height : </label>
    <input type="text" name="height" placeholder="height(cm)" required>
    </div>

</div>

<div class="form_line five">
<div class="col_1">
    <label>Package content : </label>
    <input type="text" name="package_content" required>
        </div>

<div class="col_2">
    <label>Number of packages : </label>
    <input type="text" name="number_of_packages" required>
        </div>
</div>

<div class="form_line six">
    <div class="col_1">
        <label>Notes : </label>
            <textarea name="notes"   type="text" cols="30" rows="10" ></textarea>
            </div>
</div>


<div class="btn_form">
<button type="submit" value="submit" name="submit">Send</button>
</div>

</form>
</div>
</div>

    
</body>
</html>
