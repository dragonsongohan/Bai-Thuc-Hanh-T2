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
    $txtid_kh = $_POST["txtid_kh"];
    $txttenkh = $_POST["txttenkh"];
    $txtdienthoai = $_POST["txtdienthoai"];
    $txtdiachi = $_POST["txtdiachi"];
    $affectrow = 0;
    $link = mysql_connect("localhost", "root", "")
    or die("Khong ket noi duoc MySQL Database");
    mysql_select_db("qlbanhang", $link);
    $sql = "insert into khachhang(id_kh,tenkh,dienthoai, diachi) ";
    $sql .= " values('" . $txtid_kh . "','" . $txttenkh . "',
        '" . $txtdienthoai . "','" . $txtdiachi . "')";
    $result = mysql_query($sql, $link);
    if ($result)
        $affectrow = mysql_affected_rows();
    mysql_close($link);
?>
So mau tin them vao<?= $affectrow ?>
</body>
</html>