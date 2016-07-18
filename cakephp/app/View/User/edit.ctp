<h2>学生情報登録</h2>
<div class="users form">
	<p>氏名: <?php echo $user['username'];?></p>
	<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('id',array('value' => $user['id']));?>
	    <?php echo $this->Form->input('student_id');?>
	    <?php echo $this->Form->input('graduate');?>
	    <?php echo $this->Form->input('department');?>
	    <?php echo $this->Form->input('course');?>
	    <?php echo $this->Form->input('year');?>
	    <?php echo $this->Form->input('class');?>
	    <?php echo $this->Form->input('number');?>
	<?php echo $this->Form->end('登録'); ?>
</div>