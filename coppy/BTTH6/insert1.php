<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <h2>Nguyễn Trương Duy - 20135248</h2>
    <title>:: Quan ly sinh vien::</title>
    <script language=JavaScript>
        function checkInput() {
            if (document.frmPHP.txtID.value == "") {
                alert("Invalid ID, Please enter ID");
                document.frmPHP.txtID.focus();
                return false;
            }
            if (document.frmPHP.txtName.value == "") {
                alert("Please enter Name");
                document.frmPHP.txtName.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <table>
        <form name="frmPHP" method="post" action="insert1.1.php" onsubmit="return checkInput();">
            <tr>
                <td align="left" class="content-sm"><b>
                        Please enter ID and Name to Insert
                    </b></td>
            </tr>
            <tr>
                <td align="left" >Mã viện</td>
            </tr>
            <tr>
                <td align="left">
                    <input type="text" name="txtID" size="25" maxlength="3" class="textbox">
                </td>
            </tr>
            <tr>
                <td align="left" >Tên viện</td>
            </tr>
            <tr>
                <td align="left" >
                    <input type="text" name="txtName" size="25" maxlength="50" class="textbox">
                </td>
            </tr>
            <tr>
                <td align="left" valign="top"> <br>
                    <input type="submit" value="Insert" class="button">
                    <input type="reset" value="Reset" class="button">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
