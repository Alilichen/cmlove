<?php 
/*
 +--------------------------------+
+ ������ԭ��Ȩ����ԭ����
+ �޸����ڣ�2014��9��10�� by allen == ��ϵstarsw001@163.com
+ �����޸ģ��뱣��������Ϣ������վû��Ӱ��
+--------------------------------+
*/
!function_exists('cdstr') && exit('Forbidden');$tmpnav = 'nav'.$navvar;$$tmpnav = $lst;?>
<div class=top_fav>
	<a onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo $Global['www_2domain']; ?>');" href="javascript:">��Ϊ��ҳ</a>
	- <a href="<?php echo $Global['www_2domain']; ?>" onclick="window.external.addFavorite(this.href,this.title);return false;" title='<?php echo $Global['m_sitename']; ?>' rel="sidebar">�ղ�</a><?php if (empty($cook_userid)){?>
	- <a href="<?php echo $Global['www_2domain']; ?>/login.php">��¼</a><?php }?> 
	- <a href="<?php echo $Global['www_2domain']; ?>/reg.php">ע��</a>
	- <a href="<?php echo $Global['www_2domain']; ?>/help">����</a>
</div>
<div class=top_nav>
	<div class=top_nav_left>
		<a href="<?php echo $Global['www_2domain']; ?>">
			<img src="<?php echo $Global['www_2domain']; ?>/images/logo.gif">
		</a>
	</div>
	<div class=top_nav_right>
		<ul>
			<li <?php echo $nav1; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>">��ҳ</a>
			</li>
			<li <?php echo $nav2; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/user">����</a>
			</li>
			<li <?php echo $nav3; ?>>
				<a href="<?php echo $Global['group_2domain']; ?>">Ȧ��</a>
			</li>
			<li <?php echo $nav4; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/clinic">����</a>
			</li>
			<li <?php echo $nav5; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/party">����</a>
			</li>
			<li <?php echo $nav6; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/dating">Լ��</a>
			</li>
			<!-- 
			<li <?php //echo $nav7; ?>>
				<a href="<?php //echo $Global['www_2domain']; ?>/user/online.php">����</a>
			</li>
			<li <?php //echo $nav8; ?>>
				<a href="<?php //echo $Global['www_2domain']; ?>/video">��Ƶ</a>
			</li>
			 -->
			<li <?php echo $nav9; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/diary">����</a>
			</li>
			<li <?php echo $nav10; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/photo">���</a>
			</li>
			<li <?php echo $nav11; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/user/search.php">����</a>
			</li>
			<li <?php echo $nav12; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/story">����</a>
			</li>
		</ul>
	</div>
</div>
<div class="top_login">
	<div class="left_right">
		<img src="<?php echo $Global['www_2domain']; ?>/images/nav_l.gif" />
	</div>
	<div class="top_login_c"
		<?php if (!empty($cook_nickname))echo 'lineheight';?>>
<?php if (!empty($cook_nickname)) {?>	
		<a href="<?php echo $Global['home_2domain']; ?>/<?php echo $cook_userid;?>"	target=_blank class="uff0">��<?php echo $cook_nickname; ?>��</a>(<?php echo $cook_username; ?>)��ã�
		<a href="<?php echo $Global['my_2domain']; ?>" class="nav">��������</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['my_2domain']; ?>/?b_gbook.php?submitok=list" class="nav">�ռ���</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['my_2domain']; ?>/?a2.php" class="nav">�޸�����</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['my_2domain']; ?>/?c_photo_up.php" class="nav">�ϴ���Ƭ</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['my_2domain']; ?>/?k_vip.php" class="nav">��Ա����</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['www_2domain']; ?>/exit.php" class="nav">��ȫ�˳�</a>
<?php } else {?>
<script type="text/javascript">
function checkform(){
if(document.wrzc_netform.form_username.value==""){
	alert('�������¼�û�����');
	document.wrzc_netform.form_username.focus();return false;}
if(document.wrzc_netform.form_username.value.length>12 || document.wrzc_netform.form_username.value.length<2){
	alert('�û���������3~12λ��ɡ�');
	document.wrzc_netform.form_username.focus();return false;}
if(document.wrzc_netform.form_password.value==""){
	alert('���������룡');
	document.wrzc_netform.form_password.focus();return false;
}}
</script>
		<form action="<?php echo $Global['www_2domain']; ?>/login.php" method="post" name="wrzc_netform" onsubmit="return checkform()">
			<div class="top_login_c_rows">
				<div class="top_login_c_rows1">�û�����</div>
				<div class="top_login_c_rows2">
					<input name="form_username" value="" type="text"	class=top_login_input />
				</div>
				<div class="top_login_c_rows3">���룺</div>
				<div class="top_login_c_rows4">
					<input name="form_password" value="" type="password" class=top_login_input />
				</div>
				<div class="top_login_c_rows5">
					<input name="stealth" type="checkbox" value="1" id=savepass />
				</div>
				<div class="top_login_c_rows6">
					<label for="savepass">�����¼</label>
				</div>
				<div class="top_login_c_rows7">
					<input type="image" src=../images/login.gif />
				</div>
				<div class="top_login_c_rows8">
					<a href="<?php echo $Global['www_2domain']; ?>/reg.php"><img src="../images/reg.gif" border="0" /></a>
				</div>
				<div class="top_login_c_rows9">
					<a href="<?php echo $Global['www_2domain']; ?>/forgetpass.php">�������룿</a>
				</div>
			</div>
			<input type="hidden" name="submitok" value="checkuser" />
		</form>
<?php }?>
</div>
	<div class="left_right">
		<img src="<?php echo $Global['www_2domain']; ?>/images/nav_r.gif" />
	</div>
</div>
