<pre>
  <?php
  print_r($lecture);
  ?>
</pre>

<!-- /lecture/<講義ID>に対してPOST送信-->
<form action="/lecture/<?php echo $lecture['Lecture']['id'];?>" method="post" accept-charset="utf-8">
	<input type = "hidden" name = "user_id" value = "<?php echo $user['User']['id'];?>">
	<input type = "hidden" name = "lecture_id" value = "<?php echo $lecture['Lecture']['id'];?>">
	<input type = "textarea" name="text">
	<input type = "submit" value = "送信">
</form>

<h2></h2>
<div class="comment-area">
	<pre>
		<?php print_r($comment);?>
	<pre>

</div>