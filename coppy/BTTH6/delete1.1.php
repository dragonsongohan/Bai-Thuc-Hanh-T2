<html>
    <head>
        <meta charset="utf-8">
        <title>Quản lí cán bộ</title>
    </head>
    <body>
        <?php
        $id = $_POST["id"];
        $link = mysql_connect("localhost","root","") or die("Khong the ket noi den Mysql");
        mysql_select_db("qlcanbo",$link);
        $sql = "delete from vien where Mavien ='".$id."'";
        $result = mysql_query($sql,$link);
        if($result){
            $totalRows = "Xoa thanh cong";
            mysql_close();
        }else{
            $totalRows = "khong xoa duoc";
        }
        ?>
        <?php echo $totalRows?>
    </body>

</html>
