<html>
    <head>
    <h2>Nguyễn Trương Duy - 20135248</h2>
    <meta charset = "utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
          <title>::Quan ly sinh vien::</title>
    <body>
        <?php
        $link = mysql_connect("localhost", "root", "");
        mysql_select_db("qlcanbo", $link);
        $totalRows = 0;
        $stSQL = "select * from monhoc";
        $result = mysql_query($stSQL, $link);
        $totalRows = mysql_num_rows($result);
        ?>
        <h3>Tong so mau tin tim thay: <?= $totalRows ?></h3>
        <table>
            <tr>
                <th><b>Mã môn học</b></th>
                <th><b>Tên môn học</b></th>
                <th>Số tiết</th>
            </tr>
            <?php
                if ($totalRows > 0) {
                $i = 0;
                while ($row = mysql_fetch_array($result)) {
                $i+=1;
                ?>
            <tr valign="top">
                <td><?= $row["MaMH"] ?> </td>
                <td ><?= $row["TenMH"] ?></td>
                <td ><?= $row["SoTiet"] ?></td>
            </tr>
            <?php
            }
            } else {
                ?>
                <tr valign="top">
                    <td >&nbsp;</td>
                    <td > <b><font face="Arial" color="#FF0000">
                            Khong tim thay thong tin hang hoa!</font></b></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
