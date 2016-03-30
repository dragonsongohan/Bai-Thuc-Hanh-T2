<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nguyễn Trương Duy - 20135248</title>
<link href="mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body style="text-align: center;"> 

<?php 
if (isset($_POST['goto'])) {
    $select = $_POST['select'];
}

function getLink($select) {
    switch ($select) {
        case "baotuoitre":
            return "http://tuoitre.vn/";
            break;
        case "baothanhnien":
            return "http://thanhnien.vn/";
            break;
        case "vnexpress":
            return "http://vnexpress.net/";
            break;
        
    }
}
function getName($select) {
    switch ($select) {
        case "baotuoitre":
            return "Báo Tuổi Trẻ";
            break;
        case "baothanhnien":
            return "Báo Thanh Niên";
            break;
        case "vnexpress":
            return "Việt Name Express";
            break;
        
    }
}
?>

    <h2 >NGUYỄN TRƯƠNG DUY - 20135248</h2>
    <div id="header" >ĐỌC BÁO TRÊN MẠNG</div>
    <div id="content">
        <form action="Page1.php" method="post" name="select">
        <br />
            <b>Chọn báo muốn đọc:</b>
            <select name="select">
                <option value="baotuoitre">Báo Tuổi Trẻ</option>
                <option value="baothanhnien">Báo Thanh Niên</option>
                <option value="vnexpress">Việt Nam Express</option>
            </select>
            <br />
            <br />
            <input type="submit" value="Đến báo mới" name="goto" style="margin-left: 120px; width: 150px;"/>
            <br />
            <?php 
            if (!empty($select)) { print("<a  href=" . getLink($select) . ";>Visit: " . getName($select) . ";</a>"); }?>
        </form>
    </div>
</body>
</html>