<?php
/*
 +--------------------------------+
+ 本程序原版权属于原作者
+ 修改日期：2014年9月10号 by allen == 联系starsw001@163.com
+ 如有修改，请保留本段信息，对您站没有影响
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
$Global['m_sitename']        = '相约同行网';//网站名称
//网站Title标题
//$Global['m_sitetitle']       = '相约同行婚恋网-最专业的婚恋交友网站，相约同行将推出更多的交友，征婚，婚恋，婚介机构网站,交友，征婚，婚恋，婚介网站管理系统';
$Global['m_sitetitle']       = '相约同行网,是首家以相亲、交友旅游为概念的大型交友旅游网站,专为同城的单身男女白领提供相亲交友服务,免费发布约会促成同城交友,
		坚持诚信相亲，所有交友信息都经过严格审核,为用户提供一个高品质的同城约会平台。找美女、帅哥约会,就来相约同行网站!相亲上相约同行网 与您相约今天 牵手未来；
		认认真真谈恋爱 实名认证相亲?实名认证 匿名相亲?相亲更放心 成熟男女相亲?注册相约同行网 一起告别单身!专为单身人士相亲平台.火爆的异性相亲网站.
		同城寂寞男女相亲相亲好选择,同城速配相亲.<相约同行>高端相亲网,一生佳缘,永恒真爱……';
//网站seo关键词,最好不要超过5个,以逗号隔开
$Global['m_keywords']        = '相约同行婚恋网,交友,征婚,相亲,交友网';
//网站seo简介,100字以内
$Global['m_description']     = '相约同行网,是第一家以相亲、交友旅游为概念的大型交友旅游网站,专为同城的单身男女白领提供相亲交友服务,免费发布约会促成同城交友,
		坚持诚信相亲，所有交友信息都经过严格审核,为用户提供一个高品质的同城约会平台。找美女、帅哥约会,就来相约同行网站!相亲上相约同行网 与您相约今天 牵手未来；
		认认真真谈恋爱 实名认证相亲?实名认证 匿名相亲?相亲更放心 成熟男女相亲?注册相约同行网 一起告别单身!专为单身人士相亲平台.火爆的异性相亲网站.
		同城寂寞男女相亲相亲好选择,同城速配相亲.<相约同行>高端相亲网,一生佳缘,永恒真爱……';
$Global['m_cookdomain']      = '';//不要修改这里2010-2-1
$Global['m_siteurl']         = 'www.aileyou520.com';//网址
$Global['m_regloveb']        = 500;//注册送Love币
$Global['m_gbookloveb']      = -50;//钻石发留言
$Global['m_article_jh']      = 1000;//日记、求助精华奖励
$Global['m_askloveb']        = 1000;//最佳答案
$Global['m_body']            = ' bgcolor=#ffffff ';
$Global['m_flvpath']         = 'flvv';//flv存放路径
$Global['m_gbookadminuid']   = 1;//指定客服ID号
$Global['m_onlinetime']      = 20;//在线时间
$Global['m_firstlogin']      = 100;//第一次登录奖励
$Global['m_photo_num1']      = 5;//普通会员上传数量
$Global['m_photo_num2']      = 20;//诚信上传数量
$Global['m_photo_num3']      = 100;//钻石上传数量
$Global['m_group_add']       = 100;//发布主题贴子增圈子财富
$Global['m_group_bbsadd']    = 10;//发布评论增圈子财富
$Global['m_group_tempphoto'] = 20;//诚信会员一天最多上传n张照片
$Global['m_friend_num']      = 100;//普通会员好友上限
$Global['m_gbook_num']       = 200;//普通会员留言上限
$Global['m_ifemail_day']     = 30;//30不登录发email
$Global['m_regbadwords']     = "qq:,QQ:,Q:,ＱＱ号码,QQ,qq,ＱＱ,交友中心,交友网,做爱,性交,一夜情,交友系统,日你,性交,admin,GYL,manage,supdes,版主,管理员,斑竹,公安,毛泽东,江泽民,胡锦涛,操你妈,客服,法轮";//屏蔽注册非法字符
$Global['m_badwords']        = "qq:,QQ:,Q:,ＱＱ号码,QQ,qq,ＱＱ,交友中心,交友网,做爱,性交,一夜情,交友系统,日你,性交,公安,毛泽东,江泽民,胡锦涛,操你妈,法轮,Q  Q:";//屏蔽非法字符
$Global['m_area1']           = '上海';//默认省级
$Global['m_area2']           = '上海';//默认市级
$Global['www_2domain']       = 'http://'.$Global['m_siteurl'];
$gyl=$Global['www_2domain'];
$Global['home_2domain']      = $gyl.'/home';
$Global['up_2domain']        = $gyl.'/up';
$Global['my_2domain']        = $gyl.'/my';
$Global['group_2domain']     = $gyl.'/group';
$Global['chat_2domain']      = $gyl.'/chat';
$Global['admin_2domain']     = $Global['www_2domain'].'/admin/';//不要修改
$lst = ' class=liselect';
?>