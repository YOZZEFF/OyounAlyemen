<?php
require('../includes/connectdb.php');
session_start();
if(isset($_SESSION['admin'])){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="control_panel.css">
    <title>Control panel</title>
    <link rel="icon" href="../images/logo.webp" type="image/x-icon">

</head>
<body>
  <div class="card">
    <a href="logout.php">Logout</a>
   
  </div>


<table  class="cust">
  <thead >
    <tr>
    <th scope="col">#</th>
      <th scope="col" class="name">الاسم</th>
      <th scope="col">رقم الموبايل</th>
      <th scope="col">الواجهه (من)</th>
      <th scope="col">الواجهه (الي)</th>
      <th scope="col">المدينه</th>
      <th scope="col">طريقه الشحن</th>
      <th scope="col" class="num">الوزن</th>
      <th scope="col" class="num">الطول</th>
      <th scope="col" class="num">العرض</th>
      <th scope="col" class="num">الارتفاع</th>
      <th scope="col" class="content">محتوي الطرد</th>
      <th scope="col" class="num">عدد الطرود</th>
      <th scope="col" class="notes">ملاحظات</th>
      <th scope="col">حذف</th>

        </tr>
</thead>
<?php
$num=1;
$sql="SELECT * FROM `customers`";
$result=mysqli_query($connection,$sql);
while($row= mysqli_fetch_assoc($result)){
 
  ?>
  <tbody>
   
    <tr>
      <td ><?php echo $num;?> </td>
      <td  class="name"><?php echo $row['full_name'] ?></td>
      <td><?php echo $row['mobile'] ?></td>
      <td><?php echo $row['from'] ?></td>
      <td><?php echo $row['to_country'] ?></td>
      <td><?php echo $row['to_city'] ?></td>
      <td><?php echo $row['ship_method'] ?></td>
      <td class="num"><?php echo $row['weight'] ?></td>
      <td class="num"><?php echo $row['length'] ?></td>
      <td class="num"><?php echo $row['width'] ?></td>
      <td class="num"><?php echo $row['height'] ?></td>
      <td class="content"><?php echo $row['content'] ?></td>
      <td class="num"><?php echo $row['number_of_packages'] ?></td>
      <td class="notes"><?php echo $row['notes'] ?></td>
      <td class="delete">
      


<form action="control_panel.php?id=<?=$row['id']?>" method="POST">
<a href='delete_customer.php?id=<?=$row['id']?>'>delete</a>
</form>

</td>
</tr>

</tbody>
<?php
$num++;}

?>
</table>
<?php
if (isset($connection)) {
    mysqli_close($connection);
}
?>
</body>
</html>
<?php
}else{
  header('location: login_admin.php');
}
?>