<?php
require_once 'sub/init.php';$navvar=1;
require_once wrzc_net.'sub/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<style type="text/css"> 
.top_login .top_login_c .L,.top_login .top_login_c .R{float:left;height:41px;line-height:41px;color:#FFCCD9}
.top_login .top_login_c .L{width:320px;padding:0 0 0 80px;text-align:left}
.top_login .top_login_c .R{width:497px;padding:0 75px 0 0;text-align:right}
.top_login .top_login_c .R a{text-decoration:underline;color:#ff0;font-weight:bold}
.top_login .top_login_c .R a:hover{color:#cf0}
.main1 {width:922px;height:20px;margin:0px auto;margin-top:15px;background-image:url(images/login1.gif)}
.main2 {width:922px;margin:0px auto;background-image:url(images/login2.gif)}
.main2 .box{width:880px;margin:0px auto;background:#FFF5F9;border:#F7E4ED 1px solid}
.main2 .box .line1{width:880px;height:60px;line-height:60px;padding:20px 0 0 0;font-size:18px;font-family:����,����;color:#6F9F00}
.main2 .box .line2{width:680px;line-height:200%;text-align:left;padding:10px 100px 80px 100px;font-family:Verdana;font-size:14px}
.main3 {width:922px;height:20px;margin:0px auto;background-image:url(images/login3.gif);margin-bottom:20px}
</style>
</head>
<body>
<?php require_once wrzc_net.'top.php';?>
<div class="main1"></div>
<div class="main2">
	<div class="box">
		<div class="line1">����<?php echo $Global['m_sitename']; ?></div>
	    <div class="line2">	    ����<?php echo $Global['m_sitename'] ?>(<?php echo $Global['m_siteurl'] ?>)�ɹ�������־�ɴ�����2000��12��15�գ��ǹ��ݹ�����ʵ���Ƴ��Ż������ѵķ����ߺͳ����ߣ���������ڿ��Ѱ����İ��飬<?php echo $Global['m_sitename'] ?>Ҳ��������õ�ѡ��ͨ����д���ϡ��ύ֤����������Ƭ����֤��ݱ�������ȷ�������һ������ʵ���ƽ���ƽ̨������֯�����������������ѡ�������ѯ���Ĵ����ģʽ������ݡ�<br />
	    ������վ������ʵ��ȫ�������˹�����ƶȣ����ػ�Ա30����������ݣ�����㶫������ȫ�����ṩ���顢��顢���䡢��Ƶ��Լ�ᡢ�ռǡ����졢���׵Ƚ��ѷ��񣬴��ƻ�齻�Ѵ�ͳ��ʽ��Ŭ��Ӫ����ݵ�����רҵ�Ĺ�����ʵ���ƻ�������ƽ̨!<br />
	    �������������磬��������ʣ���������־��ףԸ��������ҵ����е�Ta��<br />
	    <br />
	  </div>
	</div>
	<div class="clear"></div>
</div>
<div class="main3"></div>
<?php require_once wrzc_net.'bottom.php';?>
