<?php
/*
+--------------------------------+
+ ����̨�����Ȩ���ڱ�������
+--------------------------------+
*/
require_once '../sub/init.php';
require_once '../sub/conn.php';
require_once '../sub/fun.php';
require_once 'session.php';
session_start();
?>
<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<base target="mainframe">
<body bgcolor="#D5AAB3" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="118" height="25" border="0" align="center" cellpadding="1" cellspacing="0">
<tr>
<td align="center" bgcolor="#B13773"><a href="../" target="_blank"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_SESSION['adminname'];?></font></a><font color="#FFFFFF"> ����<font size="3"><i>��</i></font></font></td>
</tr>
</table>
<table width="118" border="0" align="center" cellpadding="1" cellspacing="1">
<tr> 
<td height="20" align="center" bgcolor="#D879A7" style="padding-top:3px;"><a href="../" target="_blank"><font color="#FFFFFF"><b>��վ��ҳ</b></font></a></td>
</tr>
<tr> 
<td height="1"></td>
</tr>
<tr> 
<td height="140" bgcolor="#F5E8F1" style="line-height:25px;"><font color="#EA6A8D" face="Webdings">4</font><a href="user_search.php"><b>��Ա��������</b></a><br>      
<font color="#EA6A8D" face="Webdings">4</font><a href="photo_search.php"><font color="#DD248A"><b>�ϴ���Ƭ����</b></font></a>
<br>
<font color="#EA6A8D" face="Webdings">4</font><a href="user_jb_list.php"><b><font color="#000000">�����������</font></b></a><br>
<font color="#EA6A8D" face="Webdings">4</font><a href="user_kz_list.php"><b><font color="#000000">��չ�������</font></b></a><br>      
<font color="#EA6A8D" face="Webdings">4</font><a href="supphoto_search.php"><font color="#DD248A">����ͼƬ����</font></a></td>
</tr>
<tr><td></td></tr>
<tr>
<td height="24" bgcolor="#FFFFFF" style="line-height:25px;"><font color="#EA6A8D" face="Webdings">4</font><a href="attestation_search.php"><b>ʵ����֤</b></a><br>
<font color="#EA6A8D" face="Webdings">4</font><a href="attestation_userid.php">�ֶ�ǿ����֤</a></td>
</tr>
<tr>
<td height="25" bgcolor="#F5E8F1" style="line-height:25px;"><font color="#EA6A8D" face="Webdings">4</font><a href="user_pass.php?kind=1">���û�Ա����</a><br><font color="#EA6A8D" face="Webdings">4</font><a href="user_pass.php?kind=2">�޸Ļ�Ա�Ա�</a></td>
</tr>

<tr><td></td></tr>
<tr>
<td height="25" bgcolor="#FFFFFF"><font color="#EA6A8D" face="Webdings">4</font><a href="dating_search.php"><b>1+1Լ�����</b></a><br>
<font color="#EA6A8D" face="Webdings">4</font><a href="dating_user_search.php">Լ������</a></td>
</tr>
<tr>
  <td height="25" bgcolor="#FFFFFF" style="line-height:24px;"><font color="#EA6A8D" face="Webdings">4</font><a href="video_search.php"><b><font color="#DD248A">��Ƶ����</font></b></a><br><font color="#EA6A8D" face="Webdings">4</font><a href="videooklist_search.php">�������ֿ�</a></td>
</tr>
<tr> 
<td height="25" bgcolor="#FFFFFF" style="line-height:150%;"><font color="#EA6A8D" face="Webdings">4</font><a href="diary_search.php"><b>�ռǹ���</b></a>��<font color="#EA6A8D" face="Webdings">4</font><a href="diarybbs_search.php">����</a></td>
</tr>
<tr> 
<td height="30" bgcolor="#FFFFFF"><font color="#EA6A8D" face="Webdings">4</font><a href="ask_search.php"><b>��������</b></a>��<font color="#EA6A8D" face="Webdings">4</font><a href="askbbs_search.php">�ش�</a></td>
</tr>
<tr> 
<td></td>
</tr>
<tr> 
<td height="30" bgcolor="F5E8F1"><font color="#EA6A8D" face="Webdings">4</font><a href="gbook_search.php" target="mainframe">��Ա���Թ���</a></td>
</tr>
<tr>
<td height="140" bgcolor="#FFFFFF" style="line-height:20px;"><font color="#EA6A8D" face="Webdings">4</font><a href="group_total.php">����</a>��<font color="#EA6A8D" face="Webdings">4</font><a href="group_total.php?submitok=add">����</a><br>      
<font color="#EA6A8D" face="Webdings">4</font><a href="group_list_search.php"><b>Ȧ���б�</b></a><br>
<font color="#EA6A8D" face="Webdings">4</font><a href="group_photo.php"><font color="DD248A">Ⱥ����Ƭ</font></a><br>      
<font color="#EA6A8D" face="Webdings">4</font><a href="group_club_search.php"><b>�����</b></a>��<font color="#EA6A8D" face="Webdings">4</font><a href="group_club_bbs_search.php">����</a><br>      
<font color="#EA6A8D" face="Webdings">4</font><a href="group_club_photo.php"><font color="DD248A">���Ƭ</font></a><br>      <font color="#EA6A8D" face="Webdings">4</font><a href="group_wz_search.php"><b>��������</b></a>��<font color="#EA6A8D" face="Webdings">4</font><a href="group_wz_bbs_search.php">����</a></td>
</tr>

<tr>
<td height="80" bgcolor="F5E8F1" style="line-height:20px;"><font color="#EA6A8D" face="Webdings">4</font><a href="story_search.php"><b>�ɹ�����</b></a><br>      
<font color="#EA6A8D" face="Webdings">4</font><a href="story_bbs_search.php">ף������</a><br>
<font color="#EA6A8D" face="Webdings">4</font><a href="story_photo.php"><font color="DD248A">�ɹ�������Ƭ</font></a></td>
</tr>

<tr>
<td height="25" bgcolor="#FFFFFF"><font color="#EA6A8D" face="Webdings">4</font><a href="present.php" target="mainframe"><b>�������</b></a></td>
</tr>
<tr>
<td height="25" bgcolor="#FFFFFF"><font color="#EA6A8D" face="Webdings">4</font><a href="news.php?kind=1" target="mainframe"><b>��վ����</b></a></td>
</tr>
<tr>
<td height="25" bgcolor="#FFFFFF"><font color="efefef"><font color="#EA6A8D" face="Webdings">4</font><a href="news.php?kind=2" target="mainframe">��������</a></font></td>
</tr>
<tr>
<td height="25" bgcolor="#FFFFFF"><font color="efefef"><font color="#EA6A8D" face="Webdings">4</font><a href="news.php?kind=3" target="mainframe">��������</a></font></td>
</tr>
<tr>
<td height="25" bgcolor="#FFFFFF"><font color="efefef"><font color="#EA6A8D" face="Webdings">4</font><a href="315.php" target="mainframe"><b>�ٱ�����</b></a></font></td>
</tr>
<tr>
<td height="25" bgcolor="#FFFFFF"><font color="efefef"><font color="#EA6A8D" face="Webdings">4</font><a href="lovebqd_search.php" target="mainframe"><b>Love���嵥</b></a></font></td>
</tr>
<tr>
<td height="25" bgcolor="#FFFFFF"><font color="efefef"><font color="#EA6A8D" face="Webdings">4</font><a href="vip_search.php" target="mainframe"><b>VIP��Ա����</b></a></font></td>
</tr>
<tr>
<td height="25" bgcolor="#FFFFFF"><font color="efefef"><font color="#EA6A8D" face="Webdings">4</font><a href="top200.php" target="mainframe">�����¼TOP200</a><a href="site.php"></a></font></td>
</tr>
<tr> 
<td height="25" bgcolor="EBEDF5"><font color="efefef"><font color="#EA6A8D" face="Webdings">4</font><a href="ip.php" target="mainframe">�Ƿ�IP����</a><a href="site.php"></a></font></td>
</tr>
<tr>
  <td height="25" bgcolor="EBEDF5"><font color="efefef"><font color="#EA6A8D" face="Webdings">4</font><a href="adminuser.php" target="mainframe">����Ա���</a><a href="site.php"></a></font></td>
</tr>
<tr> 
<td height="25" bgcolor="EBEDF5"><font color="#EA6A8D" face="Webdings">4</font><a href="modpass.php">����Ա�����޸�</a></td>
</tr>
<tr> 
<td height="30" align="center" bgcolor="F5E8F1"><a href="exit.php" target="_parent"><b>�� ��</b></a></td>
</tr>
</table>
</body>
</html>

