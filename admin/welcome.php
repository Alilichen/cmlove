<?php
require_once '../sub/init.php';
require_once '../sub/conn.php';
require_once '../sub/fun.php';
require_once 'session.php';
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title></title>
</head>
<link href="main.css" rel="stylesheet" type="text/css">
<body bgcolor="FFF6FD">
<table width="778" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="bottom"> 
    <td height="200" colspan="2" align="center" style="font-size:10.3pt;">
    	<b><b><font color="0066CC" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_SESSION['adminname'];?></font>
    	</b><font color="0066CC"><i></i></font>欢迎进入相约同行网后台管理系统！</b>
    </td>
  </tr>
  <tr> 
    <td width="483" align="right" valign="top">&nbsp;</td>
    <td width="295" valign="top"><br> 
<br>
      <font color="#666666">请您选择左边要操作的栏目。</font><br>
    <br></td>
  </tr>
</table>
</body>
</html>