<?php
/*
 +--------------------------------+
+ ������ԭ��Ȩ����ԭ����
+ �޸����ڣ�2014��9��10�� by allen == ��ϵstarsw001@163.com
+ �����޸ģ��뱣��������Ϣ������վû��Ӱ��
+--------------------------------+
*/
date_default_timezone_set('PRC');
$mtime = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];
$php_error_reporting = 0;
switch($php_error_reporting) {
	case 0: error_reporting(0); break;
	case 1: error_reporting(E_ERROR | E_WARNING | E_PARSE); break;
	case 2: error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); break;
	case 3: error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); break;
	case 4: error_reporting(E_ALL ^ E_NOTICE); break;
	case 5: error_reporting(E_ALL); break;
	default:error_reporting(E_ALL);
}
session_start();
ob_start();
define('wrzc_net',substr(dirname(__FILE__), 0, -3));
// var_dump(wrzc_net);exit;
require_once wrzc_net.'sub/fun.php';
set_magic_quotes_runtime(0);
$magic_quotes_gpc = get_magic_quotes_gpc();
extract(daddslashes($_POST,1));
extract(daddslashes($_GET,1));
extract($_COOKIE);
//if(!$magic_quotes_gpc) {$_FILES = daddslashes($_FILES);}
/*Cfg*/
$Global['m_sitename']        = '��Լͬ�л�����';//��վ���ƣ��硰����־�ɽ��ѻ�������
$Global['m_sitetitle']       = '��Լͬ�л�����-��רҵ�Ļ���������վ����Լͬ�н��Ƴ�����Ľ��ѣ����飬��������������վ,���ѣ����飬�����������վ����ϵͳ';//��վTitle����
$Global['m_keywords']        = '��Լͬ�л�����,����,����,���ף�����Դ��,������վԴ��,������վԴ������,ͬ�ǽ���Դ��,������Դ��php�����ѳ���,ͬ�ǽ��ѳ���,������վ����,������վ��������,������ģ��,������Դ��,������ģ��';//��վseo�ؼ���,��ò�Ҫ����5��,�Զ��Ÿ���
$Global['m_description']     = '��Լͬ�л�����,��רҵ�Ļ���������վ';//��վseo���,100������
$Global['m_cookdomain']      = '';//��Ҫ�޸�����2010-2-1
$Global['m_siteurl']         = 'www.aileyou520.com';//��ַ
$Global['m_regloveb']        = 500;//ע����Love��
$Global['m_gbookloveb']      = -50;//��ʯ������
$Global['m_article_jh']      = 1000;//�ռǡ�������������
$Global['m_askloveb']        = 1000;//��Ѵ�
$Global['m_body']            = ' bgcolor=#ffffff ';
$Global['m_flvpath']         = 'flvv';//flv���·��
$Global['m_gbookadminuid']   = 1;//ָ���ͷ�ID��
$Global['m_onlinetime']      = 20;//����ʱ��
$Global['m_firstlogin']      = 100;//��һ�ε�¼����
$Global['m_photo_num1']      = 5;//��ͨ��Ա�ϴ�����
$Global['m_photo_num2']      = 20;//�����ϴ�����
$Global['m_photo_num3']      = 100;//��ʯ�ϴ�����
$Global['m_group_add']       = 100;//��������������Ȧ�ӲƸ�
$Global['m_group_bbsadd']    = 10;//����������Ȧ�ӲƸ�
$Global['m_group_tempphoto'] = 20;//���Ż�Աһ������ϴ�n����Ƭ
$Global['m_friend_num']      = 100;//��ͨ��Ա��������
$Global['m_gbook_num']       = 200;//��ͨ��Ա��������
$Global['m_ifemail_day']     = 30;//30����¼��email
$Global['m_regbadwords']     = "qq:,QQ:,Q:,�ѣѺ���,QQ,qq,�ѣ�,��������,������,����,�Խ�,һҹ��,����ϵͳ,����,�Խ�,admin,GYL,manage,supdes,����,����Ա,����,����,ë��,������,������,������,�ͷ�,����";//����ע��Ƿ��ַ�
$Global['m_badwords']        = "qq:,QQ:,Q:,�ѣѺ���,QQ,qq,�ѣ�,��������,������,����,�Խ�,һҹ��,����ϵͳ,����,�Խ�,����,ë��,������,������,������,����,Q  Q:";//���ηǷ��ַ�
$Global['m_area1']           = '�㶫';//Ĭ��ʡ��
$Global['m_area2']           = '����';//Ĭ���м�
$Global['www_2domain']       = 'http://'.$Global['m_siteurl'];
$gyl=$Global['www_2domain'];
$Global['home_2domain']      = $gyl.'/home';
$Global['up_2domain']        = $gyl.'/up';
$Global['my_2domain']        = $gyl.'/my';
$Global['group_2domain']     = $gyl.'/group';
$Global['chat_2domain']      = $gyl.'/chat';
$Global['admin_2domain']     = $Global['www_2domain'].'/admin/';//��Ҫ�޸�
$lst = ' class=liselect';
?>