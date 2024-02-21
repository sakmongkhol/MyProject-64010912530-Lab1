<?php
@session_start();

?>
<?php
include("connectdb.php");

$sql = "SELECT * FROM `all` WHERE `p_id` ='{$_GET['id']}'";
$rs = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($rs);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ฟอร์มเพิ่มข้อมูลสินค้า</title>
</head>

<h1>ฟอร์มแก้ไขสินค้า</h1>

<form method="post" action="" enctype="multipart/form-data">
ชื่อสินค้า <input type="text" name="pname" autofocus required value="<?=$data['p_name'];?>"><br>
ราคา(บาท) <input type="number" name="pprice" required value="<?=$data['p_price'];?>"><br>
รายละเอียด<br>
<textarea name="pdetail" cols="50" rows="6"><?=$data['p_detail'];?>"</textarea><br>
รูปสินค้า <input type="file" name="picture"><br>
ประเภทสินค้า<br>
<select name="cate">
 <?php
include("connectdb.php");
$sql2 = "SELECT * FROM `category`";
$rs2 = mysqli_query($conn, $sql2);
while ($data2 = mysqli_fetch_array($rs2)){
	?>
    
    <option value="<?=$data2['c_id'];?>" <?=($data2['c_id']==$data['p_type'])?"selected":"";?> ><?=$data2['c_name'];?></option>
<?php } ?>
</select>
<br><br>
<input type="submit" name="Submit" value="บันทึกข้อมูล">

</form>

<?php
if(isset($_POST['Submit'])){
    if($_FILES['picture']['name']!=""){
        $allowed = array('gif', 'png', 'jpg', 'jpeg', 'jfif');
        $filename = $_FILES['picture']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            echo "<script>";
            echo "alert('แก้ไขข้อมูลสินค้าไม่สำเร็จ! ไฟล์รูปต้องเป็น jpg gif หรือ png เท่านั้น');";
            echo "</script>";
            exit;
        } 
        @copy($_FILES['picture']['tmp_name'], "images/".$_GET['id'].".".$ext);
        $sql = "UPDATE `all` SET `p_name`='{$_POST['pname']}', `p_detail`='{$_POST['pdetail']}', `p_price`='{$_POST['pprice']}', `p_img`='{$ext}', `p_type`='{$_POST['cate']}' WHERE `p_id`='{$_GET['id']}';";
    } else {
        $sql = "UPDATE `all` SET `p_name`='{$_POST['pname']}', `p_detail`='{$_POST['pdetail']}', `p_price`='{$_POST['pprice']}', `p_type`='{$_POST['cate']}' WHERE `p_id`='{$_GET['id']}';";
    }
    //var_dump($sql);exit;
    mysqli_query($conn, $sql) or die("แก้ไขข้อมูลสินค้าไม่ได้");
    echo"<script>";
    echo "alert('แก้ไขข้อมูลสำเร็จ');";
    echo "window.location='index2.php';";
    echo"</script>";
}    
?>

<body>
</body>
</html>
