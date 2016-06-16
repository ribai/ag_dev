<div class="active-list">
  <table>
    <tr><th>講義名</th><th>教室</th><th>時限</th><th>講師</th></tr>
<?php foreach($lecture as $key => $value): ?>
		<tr><td><?php echo $value["Lecture"]["name"]?></td>
      <td><?php echo $value["Lecture"]["room"]?></td>
      <td><?php echo $value["Lecture"]["day"]?></td>
      <td><?php echo $value["Lecture"]["teacher"]?></td>
    </tr>
<?php endforeach;?>
</table>
</div>
