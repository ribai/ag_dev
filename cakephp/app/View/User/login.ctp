<h2>ログイン</h2>
<div class="users form">
	<?php echo $this->Form->create('User'); ?>
	    <?php echo $this->Form->input('username');?>
	    <?php echo $this->Form->input('password');?>
	<?php echo $this->Form->end('ログイン'); ?>
</div>