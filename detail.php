<?php
@session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แสดงรายละเอียดสินค้า</title>
</head>

<body>

<h1>แสดงรายละเอียดสินค้า</h1>
<input type="button" value="Back" onClick="history.back();"><br>
<?php
include("connectdb.php");

$sql = "SELECT * FROM `all` WHERE `p_id` ='{$_GET['id']}'";
$rs = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($rs);
?>

<img src="images/<?=$data['p_id'];?>.<?=$data['p_img'];?>" width="650" height="500"><br>

<?=$data['p_name'];?><br>
<?=$data['p_price'];?> บาท<br>
<strong>รายละเอียดสินค้า</strong><br>
<?=$data['p_detail'];?>

</body>
</html>
