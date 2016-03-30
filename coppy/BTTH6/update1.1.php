<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>:: Quan ly sinh vien::</title>
    </head>
    <body>
        <h3>Them mau tin</h3>
        <?php
        $name = $_POST["name"];
        $id = $_POST["id"];
        $link = mysql_connect("localhost", "root", "") or die("Khong ket noi duoc toi Mysql");
        mysql_select_db("qlcanbo", $link);
        $sql = "update vien set Mavien ='" . $name . "' where Tenvien = '" . $id . "'";
        $result = mysql_query($sql, $link);
        if ($result) {
            $totalRows = mysql_affected_rows();
            mysql_close($link);
        }
        ?>
        Số mẫu tin được thêm vào là <?= $totalRows ?>
    </body>
</html>
