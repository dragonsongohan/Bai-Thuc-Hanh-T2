<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>:: Quan ly sinh vien::</title>
    </head>
    <body>
        <h3>Them mau tin</h3>
        <?php
        $txtID = $_POST["txtID"];
        $txtName = $_POST["txtName"];
        $affectrow = 0;
        $link = mysql_connect("localhost", "root", "") or die("Khong ket noi duoc MySQL Database");
        mysql_select_db("qlcanbo", $link);
        $sql = "insert into vien(Mavien,Tenvien) ";
        $sql .=" values('" . $txtID . "','" . $txtName . "')";
        $result = mysql_query($sql, $link);
        if ($result)
            $affectrow = mysql_affected_rows();
        mysql_close($link);
        ?>
        So mau tin them vao <?= $affectrow ?>
    </body>
</html>

