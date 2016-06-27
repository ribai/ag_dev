<h2>新規登録</h2>
<div class="users form">
	<?php echo $this->Form->create('User'); ?>
	    <?php echo $this->Form->input('mail');?>
	    <?php echo $this->Form->input('password');?>
	    <?php echo $this->Form->input('name');?>
	<?php echo $this->Form->end('登録'); ?>
</div>
