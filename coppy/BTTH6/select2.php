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
        $stSQL = "select * from canbo";
        $result = mysql_query($stSQL, $link);
        $totalRows = mysql_num_rows($result);
        ?>Tổng số mẩu tin tìm thấy <?= $totalRows ?></h3>
        <table>
            <tr>
                <th><b>Mã cán bộ</b></th>
                <th><b>UserName</b></th>
                <th>Password</th>
                <th>Họ cán bộ</th>
                <th>Tên cán bộ</th>
                <th>Giới tính</th>
                <th>Ngày Sinh</th>
                <th>Nơi Sinh</th>
                <th>Địa chỉ </th>
                <th>Mã viện </th>
                <th>Chức danh</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                
            </tr>
            <?php
                if ($totalRows > 0) {
                $i = 0;
                while ($row = mysql_fetch_array($result)) {
                $i+=1;
                ?>
            <tr valign="top">
                <td><?= $row["MaCB"] ?> </td>
                <td ><?= $row["Username"] ?></td>
                <td ><?= $row["Password"] ?></td>
                <td ><?= $row["HoCB"] ?></td>
                <td ><?= $row["TenCB"] ?></td>
                <td ><?= $row["GioiTinh"] ?></td>
                <td ><?= $row["NgaySinh"] ?></td> 
                <td ><?= $row["NoiSinh"] ?></td>
                <td ><?= $row["DiaChi"] ?></td>
                <td ><?= $row["Mavien"] ?></td>
                <td ><?= $row["Chucdanh"] ?></td>
                <td ><?= $row["Sodienthoai"] ?></td>
                <td ><?= $row["Email"] ?></td>
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
