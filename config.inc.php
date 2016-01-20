<?php
/**
 * Created by PhpStorm.
 * User: kantai
 * Date: 16/1/20
 * Time: 下午1:47
 */
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test";
$table_jingcai = "jingcai";
$table_yapan = "yapan";
$link = mysql_connect($host,$db_user,$db_pass) or  die(mysql_error());
mysqli_select_db($db_name,$link);