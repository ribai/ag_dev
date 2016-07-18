<?php echo $this->Html->css('lecture');?>
<?php echo $this->Html->script('evaluate');?>
<pre>
  <?php
  //print_r($lecture);
  ?>
</pre>
	<div id="lecture-view">
	<h2 class="lecture-info">
		<span class="lecture-name">
			<?php echo $lecture['Lecture']['name'];?>
		</span>
		<span class="teacher">
			担当講師：<?php echo $lecture['Lecture']['teacher'];?>
		</span>
		<span class="lecture-time">
				<?php echo $lecture['Lecture']['day'];?>曜日
				<?php echo $lecture['Lecture']['time'];?>限
		</span>
	</h2>

	<!-- /lecture/<講義ID>に対してPOST送信-->
	<form action="/lecture/<?php echo $lecture['Lecture']['id'];?>" method="post" accept-charset="utf-8">
		<input type = "hidden" id="evaluate" name = "evaluation" value = "0">
		<input type = "hidden" name = "user_id" value = "<?php echo $user['User']['id'];?>">
		<input type = "hidden" name = "lecture_id" value = "<?php echo $lecture['Lecture']['id'];?>">
		<input type = "button" onclick="addReact('good')" value="GOOD" class="btn good" id="goodbtn">
		<input type = "button" onclick="addReact('bad')" value="BAD" class="btn bad" id="badbtn">
		<textarea rows="4" name="text" id="com-textbox"></textarea>
		<input type = "submit" value = "投稿">
	</form>

	<h2></h2>
	<div class="comment-area">
		<?php if(empty($comments)):?>
			<p>現在この講義に対するコメントはありません</p>
		<?php endif;?>
		<table>
			<?php foreach ($comments as $key => $comment):?>
				<?php if(empty($comment['Comment']['text'])):continue;endif;?>
				<tr>
					<td class="user-box">
						<img src="/img/no-user.png" alt="no-user" class="user-img"><br>
					</td>
					<td>
						<div class="triangle triangle<?php echo $comment['Comment']['evaluation'];?>"></div>
					</td>
					<td class="comment-box">
						<span class="comment comment<?php echo $comment['Comment']['evaluation'];?>">
							<span><?php echo $comment['Comment']['text'];?></span>
						</span>
					</td>
				</tr>
				<tr>
					<td class="user-box user-name">
						<?php if(!empty($comment['User']['username'])):?>
							<?php echo $comment['User']['username'];?>
						<?php else:?>
							<?php echo 'unknown';?>
						<?php endif;?>
					</td>
					<td></td>
					<td></td>
				</tr>
			<?php endforeach;?>
		</table>
		<pre>
			<?php //print_r($comments);?>
		<pre>

	</div>

</div>