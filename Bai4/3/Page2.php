<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset=utf-8" />
<title>Nguyen Truong Duy - 20135248</title>
</head>
<body style="text-align: center;"> 
    <h2 >Nguyen Truong Duy - 20135248</h2>
    <h4 style="color: blue">Phep Tinh Tren Hai So</h4>
    <?php
    function result($so1, $so2, $operator) {
        $total = 0;
        switch ($operator) {
            case "Nhan":
                $total = $so1 * $so2;
                break;
            case "Chia":
                $total = $so1 / $so2;
                break;
            case "Cong":
                $total = $so1 + $so2;
                break;
            case "Tru":
                $total = $so1 - $so2;
                break;
        }
        return $total;
    }
    if (isset($_GET['calculate'])) {
        $so1 = $_GET['so1'];
        $so2 = $_GET['so2'];
        $operator = $_GET['operator'];
    }
    ?>
    <?php function  a() {}?>
    <form  style="text-align: center;">
        <table style="margin: auto">
            <tr>
                <td >Chon Phep Tinh</td>
                <td><?php echo $operator; ?></td>
            </tr>
            <tr>
                <td style="color: blue;">So 1: </td>
                <td><input type="text" name="so1" value="<?php echo $so1;?>"/></td>
            </tr>
            <tr>
                <td style="color: blue;">So 2: </td>
                <td><input type="text" name="so2" value="<?php echo $so2; ?>"/></td>
            </tr>
            <tr>
                <td style="color: blue;">Ket qua</td>
                <td><input type="text" name="ketqua" value="<?php echo result($so1, $so2, $operator); ?>"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td style="text-align: left;"><a href="javascript:window.history.back(-1);"><i style="color: blue;">Quay lai trang truoc</i></a></td>
            </tr>
        </table>
    </form>
</body>
</html>