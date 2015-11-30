<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/29/2015
 * Time: 7:13 PM
 */
session_start();
session_destroy();
echo("<script>alert(\"Loged Out\");</script>");
echo("<script>location.href='../index.php'</script>");
?>