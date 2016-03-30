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
        $stSQL = "select * from giangday";
        $result = mysql_query($stSQL, $link);
        $totalRows = mysql_num_rows($result);
        ?>Tổng số mẩu tin tìm thấy <?= $totalRows ?></h3>
    <table>
        <tr>
            <th><b>Mã cán bộ </b></th>
            <th><b>Mã môn học </b></th>
            <th>Mã kỳ </th>
            <th>Mã lớp </th>
            <th>Số sinh viên </th>
        </tr>
        <?php
        if ($totalRows > 0) {
            $i = 0;
            while ($row = mysql_fetch_array($result)) {
                $i+=1;
                ?>
                <tr valign="top" align = "center">
                    <td><?= $row["MaCB"] ?> </td>
                    <td ><?= $row["MaMH"] ?></td>
                    <td ><?= $row["Maky"] ?></td>
                    <td ><?= $row["Malop"] ?></td>
                    <td ><?= $row["Sosv"] ?></td>
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
