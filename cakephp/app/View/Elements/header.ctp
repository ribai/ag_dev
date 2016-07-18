<a href="/">
	<img class="border-header-img" src="/img/logo-agu.gif" alt="logo" />
</a>
<!-- <span class="user-name">ようこそusername<?php //echo $value["User"]["name"];?>さん</span> -->
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

<div class="border-header-sub">
◯◯学部◯◯学科　◯◯コース　◯年◯組◯番◯◯◯　user-nameさん
</div>
