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
		<div class="line1">��ȫ��֪</div>
	  <div class="line2">����<?php echo $Global['m_sitename'] ?>(<?php echo $Global['m_siteurl'] ?>)�ṩ��һ��ʵ���ƵĽ��ѻ����������л�����ʶ�������Բ�ͬ��ҵ��ͬ��λ�ĵ�����Ů�����ǲ��ұ�֤��Ա���ṩ��������100%����ʵ�ԣ��뱣��һ���ľ����ģ�Ҫ�����ǵ��ж���������ض��Լ���һ�����и��𡣲����������������ʵ�����������֮�Ĳ����ޣ�����Զ�Ǳ�������ȫ�Ľ������ԡ�<br />
	      <b>1.	����ΪӪ</b><br />
	      �����տ�ʼ�������ʹ��վ�����Ե������磬�������Է��Ƿ����κι�������оٶ�����ǰ��ì�ܵĵط����Է�������Ŀ�������������ݵ��кܴ�ĳ��룬������������Լ��ı��ܡ�һ�����е��κβ��죬Ϊ������������ȫ����Ͻ��뿪�Ա����Լ������档 <br />
	      <b>2.	���������������� </b><br />
	      ��������Ը�⽫��ʵ����͸¶��TA��֪����ǰ�������صġ������ĸ��˵�������Ǹ����˵ĵ�һ��������벻Ҫ�����������ϡ������ʼ�����ס��ַ���绰���롢�����ص���κθ����������йص���Ϣ����������Է�Ϊ����֪����������Ϣ������ʩ��ѹ��������������ͼʹ����ƭ�ķ�ʽ��֪������Ϣ��������ֹͣ���������ϵ�� <br />
	      <b>3.	��߾�����������ж��� </b><br />
	      ��������С�ģ���˼���Ǻ������ľ���ͨ����������ҵ����õ���Ե�����ڶ��׷���ߵ��У�ֻ�����桢̹�ס������ܹ��õ������εĲ��������ѡ�����ܻ�����ʱ�䶼û�й�ϵ����Ҫ����������Ҫ������˼������С�ĵ���̽��Щ����Ϊ�������ε��ˡ��������ɶԷ���˵��ʱ��Ҳ������ֱ���ǶԵģ�����������������ʵ�����Ӧ�������Լ���Ͷ�������Ҫ�����θУ������벻Ҫ̫��ط��׳��Լ������ġ��������������ϣ�Ҳ��ò�Ҫ�������Ĺ��̽�չ��̫�죬������������Ҫ�����һ���ˣ�Ҳ�뱣���ʵ��ľ������������Լ��� <br />
	      <b>4.	��ȡ��Ƭ </b><br />
	      ����ͨ��ͨ��һ����Ƭ������������˽�Է���һ����Ϣ�ͳ��࣬�������Լ���Է�������Ŀ�е�ӡ�󡣲����������࿴һЩ��ͬ���ϵ���Ƭ������Է���ʽ���ϵ���Ƭ���ճ���������������, �������Ը��Լ��༸��������ȷ��ʶ�Է���<br />
	      <b>5.	��绰���� </b><br />
	      ����ͨ���绰���԰������˽�һ���˵Ĺ�ͨ�Լ��罻������������࿼��һ���Լ��İ�ȫ���⣬ǧ�򲻿�������İ������¶�Լ��ļ�ͥ�绰���롣������ʹ���ֻ�������ͨ�����������ص绰��������⹦�ܣ��Ա����öԷ�֪�����ĺ��롣ֻ�����������ε��ˣ��ſ��Խ����ĵ绰������Է��� <br />
	      <b>6.	���棿 ��׼���ÿ��Լ������� </b><br />
	      �������罻������صĵط�����������ѭ�򽥽����ռ��Է�����Ϣ���Ӷ�ȷ���Ƿ���Ҫ��Է�������֮�����ʵ�����������顣�������Լ�ѡ���Ƿ������Ѽ��棬�����������������ϵ����ܶȺ��޹�ϵ��<br />
	      <b>7.	С�ģ� �ر𾯸棡 </b><br />
	      ����Ҫ�ǶԷ��ж�ŭ�������������ܵ����ȵ�������д�ܸС���ͼ����ʩѹ����ͼ����������ʱ�����С�ġ����⣬����Է��������Ƶľٶ���������ͻ�����������Ϊ���������д��׵����о�ֹ������֮Ϊ�ر𾯸档Ҫ������Է���Լ������У����������κ�һ���޷��������͵�����������������˼�����У�<br />
	      ����o	���ֶԷ����ṩ�ĸ�����Ϣ����ì�ܡ�<br />
	      ����o	���������ѵ춨��ĳ�̶ֳȵ����ܶȵ�ȴ�ܾ�����˵����<br />
	      ����o	�޷�ֱ�ӻش�����˵����⡣<br />
	      ����o	������������ϵı����к����ԵĲ��졣<br />
	      ����o	�����������������������ѡ�ͬ�»��Ǽ�ͥ��Ա�� <br />
	      <b>8.	Լ��ص� </b><br />
	      ���������ѡ����Է�����������ĵط����棬��ǵø�֪���������ŵ�ʱ��ʹ�Լ���᷵�ص�ʱ�䣬�������¶Է�����������ϵ�绰������ʱ������ǰ��Լ��ص㣬���Բ�Ҫ���ܻ�����Է��������Ͻ��͡�Լ��ĵص�����ǹ������ϣ��Լ������˽϶�ĵط���ѡ��һ���Լ��Ƚ���Ϥ�Ĳ�����������һ�����˽϶��ʱ��Լ�ᣬ��Щ����ʧΪһ�ְ�ȫ�ĺ÷�����<br />
	      <b>9.	����Σ�� </b><br />
	      �������Բ�Ҫ���Լ�û�а��յ����顣��Լ�����Ĺ��̵��У�һ�����������е����µ����飬�뷢�Ӵ������ǰ��Լ������������������뿪�ֳ��������о����Լ���Σ�գ����������������˰�ȫ��������Ҫ�ģ�ǧ��Ҫ���Լ�����Ϊ�е�������˼�����Σ���ǵã����İ�ȫԶ�����˶��������۸���Ҫ�� <br />
	      <br />
	      ����
	      ����:��ʵƭ�ӻ���ð������֮�˲�ֻ���������ϳ��֣����������ںܶ๫��������ҡײƭ������ҹ�ܻᡢ����������֮���Լ����������п��ܸ�������ͬһ�ҵĿ��ȵ����������������κ�һ����Լ����棬���ס������֮�Ĳ����ޡ�<br />
        <br />
	    <br />
	  </div>
	</div>
	<div class="clear"></div>
</div>
<div class="main3"></div>
<?php require_once wrzc_net.'bottom.php';?>