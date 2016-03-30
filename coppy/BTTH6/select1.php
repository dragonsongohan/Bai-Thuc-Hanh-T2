<html>
    <head>
    <h2>Nguyễn Trương Duy - 20135248</h2>
        <meta charset = "utf-8">
        <title>::Quản lí cản bộ::</title>
        <body>
            <?php
            $link = mysql_connect("localhost", "root", "");
            mysql_select_db("qlcanbo", $link);
            $totalRows = 0;
            $stSQL = "select * from vien";
            $result = mysql_query($stSQL, $link);
            $totalRows = mysql_num_rows($result);
            ?>
            <h3>Tổng số mẩu tin tìm được : <?= $totalRows ?></h3>
            <table>
                <tr>
                    <th><b>Mã viện</b></th>
                    <th><b>Tên viện</b></th>
                </tr>
                <?php
                if ($totalRows > 0) {
                    $i = 0;
                    while ($row = mysql_fetch_array($result)) {
                        $i+=1;
                        ?>
                        <tr valign="top">
                            <td><?= $row["Mavien"] ?> </td>
                            <td ><?= $row["Tenvien"] ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr valign="top">
                        <td >&nbsp;</td>
                        <td > <b><font face="Arial" color="#FF0000">
                                    Không tìm thấy thông tin!</font></b></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </body>
</html>
