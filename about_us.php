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
	    <div class="line2">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��Լͬ�����������Ϻ����ù������������޹�˾<br />
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Global['m_sitename'];?>(<?php echo $Global['m_siteurl'] ?>)���׼������ס���������Ϊ����Ĵ��ͽ���������վ,
	    רΪͬ�ǵĵ�����Ů�����ṩ���׽��ѷ���,��ѷ���Լ��ٳ�ͬ�ǽ���,��ֳ������ף�
	    ���н�����Ϣ�������ϸ����,Ϊ�û��ṩһ����Ʒ�ʵ�ͬ��Լ��ƽ̨������Ů��˧��Լ��,������Լͬ����վ!
	    <br />
	    ����<?php echo $Global['m_sitename'] ?>(<?php echo $Global['m_siteurl'] ?>)������Լ����,ǣ��δ��;��������̸����,ʵ����֤���ס�ʵ����֤��
	    �������ס����׸����ġ�������Ů���ף�ע����Լͬ������һ������!רΪ������ʿ����ƽ̨.�𱬵�����������վ.ͬ�Ǽ�į��Ů���׺�ѡ��,ͬ����������.
	    <br />
	    ����<?php echo $Global['m_sitename'] ?>(<?php echo $Global['m_siteurl'] ?>)�߶�������רΪ����ȸ߶˾�Ӣ��ʿ�ṩ�����񣬽��ѵ�רҵ������VIP��һ��һ����!
	    <br />
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ǯ���������ڡ�Χ�ǡ�д���������ڿ��ö��˴˲��������,�ſ��Խύ�����ѡ�������ˣ����¾͸���Ҫ�����������Ǽ���һ�����Ƿ��ʺ������µķ�ʽ��
	    �����Ǽ�����ʲ����ʵ���Ч;���������������ʱ��ܶ��ݣ�ץס��ʵ�ľ��ʣ��������ʵ�������������ɣ�
		<br />
	  </div>
	</div>
	<div class="clear"></div>
</div>
<div class="main3"></div>
<?php require_once wrzc_net.'bottom.php';?>
