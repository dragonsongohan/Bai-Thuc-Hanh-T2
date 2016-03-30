<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nguyen Truong Duy - 20135248</title>
</head>
<body> 
<h2>Nguyen Truong Duy - 20135248</h2>
<h4>Form variable</h4>
<?php $name = $_POST['fullname'];  $gender=$_POST['gender'];?>
<table>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo $gender; ?></a></td>
    </tr>
</table>
</body> 
</html> 
