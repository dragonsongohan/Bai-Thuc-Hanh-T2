<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Nguyễn Trương Duy - 20135248</title>
<body>
<?php
    $link = mysql_connect("localhost", "root", "") or die ("Không kết nối được database");
    mysql_select_db("qlbanhang", $link);
    $totalRows = 0;
    $strSQL = "select * from hoadon";
    $result = mysql_query($strSQL, $link);
    $totalRows = mysql_num_rows($result);
?>
    <h1 style="text-align: center">Nguyễn Trương Duy - 20135248</h1>
    <h3 style="text-align: center">Tổng số mẫu tìm thấy: <?=$totalRows ?></h3>
<table style="margin: auto;">
    <tr>
        <th><b>Mã Hóa Đơn</b></th>
        <th><b>Ngày lập hóa đơn</b></th>
        <th><b>Mã Khách Hàng</b></th>
        <th><b>Mã Nhân Viên</b></th>
        <th><b>Ngày giao hàng</b></th>
        <th><b>Tổng tiền</b></th>
    </tr>
    <?php
    if($totalRows>0){
        $i=0;
        // Sử dụng vòng lặp để duyệt kết quả truy vấn
        while ($row = mysql_fetch_array ($result))
        {
            $i+=1;
            ?>
            <tr valign="top">
                <td><?=$row["id_hd"]?> </td>
                <td ><?=$row["ngaylaphd"]?></td>
                <td ><?=$row["id_kh"]?></td>
                <td ><?=$row["id_nv"]?></td>
                <td ><?=$row["ngaygiaohang"]?></td>
                <td ><?=$row["tongtien"]?></td>
            </tr>
            <?php
        }
    }else{
        ?>
        <tr valign="top">
            <td >&nbsp;</td>
            <td > <b><font face="Arial" color="#FF0000">
                        Khong tim thay thong tin san pham!</font></b></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>