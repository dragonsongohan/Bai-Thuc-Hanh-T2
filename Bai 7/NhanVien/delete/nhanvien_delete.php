<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Nguyễn Trương Duy - 20135248</title>
<body>
<h2>Nguyễn Trương Duy - 20135248</h2>
<h3>Thêm mẩu tin</h3>
<?php
    $id_nv = $_POST['id_nv'];
    $affectrow = 0;
    $user = "root";
    $url = "localhost";
    $pass = "";
    $database_name = "qlbanhang";
    $link = mysql_connect($url, $user, $pass) or die ("Không kết nối được MySQL Database");
    mysql_select_db($database_name, $link);
    $sql="delete from nhanvien where id_nv='";
    $sql .=$id_nv . "'";
    $result = mysql_query($sql, $link);
    if ($result) {
        $affectrow = mysql_affected_rows();
        mysql_close($link);
    }
    ?>
    Số mẫu tin thêm vào <?= $affectrow
?>
</body>
</html>
