<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-
8"/>
    <title>Nguyễn Trương Duy - 20135248</title>
</head>
<body>
<h1>Nguyễn Trương Duy - 20135248</h1>
<h3>Them mau tin</h3>
<?php
$txtid_sp = $_POST["txtid_sp"];
$txttensanpham = $_POST["txttensanpham"];
$txtdongia = $_POST["txtdongia"];
$affectrow = 0;
$link = mysql_connect("localhost", "root", "")
or die("Khong ket noi duoc MySQL Database");
mysql_select_db("qlbanhang", $link);
$sql = "insert into sanpham(id_sp,tensanpham,dongia) ";
$sql .= " values('" . $txtid_sp . "','" . $txttensanpham . "',
'" . $txtdongia . "')";
$result = mysql_query($sql, $link);
if ($result)
    $affectrow = mysql_affected_rows();
mysql_close($link);
?>
So mau tin them vao<?= $affectrow ?>
</body>
</html>