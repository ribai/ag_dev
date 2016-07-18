<a href="/">
	<img class="border-header-img" src="/img/logo-agu.gif" alt="logo" />
</a>
<span class="new-account">
	<a href="/user/signup">新規登録はこちらから</a>
</span>

<span class="new-account">
	<?php if(empty($this->Session->read('Auth.User'))):?>
		<a href="/user/login">ログイン</a> /
	<?php else:?>
		<a href="/user/logout">ログアウト</a> /
	<?php endif;?>
</span>

<div class="border-header">
  AGU Student Portal Site "EagoWing"
</div>
<?php if($USER):?>
<div class="border-header-sub">
<?php echo $USER['graduate'];?>学部　<?php echo $USER['department'];?>学科　　
<?php echo $USER['year'];?>年
<?php echo $USER['class'];?>組
<?php echo $USER['number'];?>番
<?php echo $USER['student_id'];?>　<?php echo $USER['username'];?>さん
</div>
<?php endif;?>
