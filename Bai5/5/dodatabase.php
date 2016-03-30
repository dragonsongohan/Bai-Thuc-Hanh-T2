<?php

    function doSomething($strSql) {
        $affectrow = 0;
        $user = "root";
        $url = "localhost";
        $pass = "";
        $database_name = "qlsinhvien";
        $link = mysql_connect($url, $user, $pass) or die ("Không k?t n?i du?c MySQL Database");
        mysql_select_db($database_name, $link);
        $result = mysql_query($strSql, $link);
        if ($result) {
            $affectrow = mysql_affected_rows();
            mysql_close($link);
        }
        return $result;
    }

?>