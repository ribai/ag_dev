<?php echo $this->Html->css('lecture');?>
<h2>現在開講中の講義</h2>
<div class="lectures">
	<ul>
		<?php $LIMIT = 7; $i =0;?>
		<?php foreach ($now_lecture as $key => $lectures): ?>
			<?php if($i == $LIMIT):break;endif;?>
			<li>
				<table>
					<tr>
						<th><?php echo $key."棟";?></th>
					</tr>
					<?php foreach ($lectures as $key2 => $lec):?>
						<tr>
							<td>
								<a href="/lecture/<?php echo $lec['id'];?>"><?php echo $lec['name'];?></a>
							</td>
						</tr>
					<?php endforeach;?>
				</table>
			</li>
			<?php $i++;?>
		<?php endforeach; ?>
	</ul>
</div>

<div class="active-list">
	<h2>最新の実況</h2>
	<table>
		<tr><th>講義名</th><th>教室</th><th>時限</th><th>講師</th></tr>
		<?php foreach ($lecture as $key => $value):?>
		<tr><td><a href="/lecture/<?php echo $value['Lecture']['id'];?>"><?php echo $value['Lecture']['name'];?></a></td>
			  <td><?php echo $value['Lecture']['room'];?></td>
				<td><?php echo $value['Lecture']['time'];?></td>
				<td><?php echo $value['Lecture']['teacher'];?></td>
			</tr>
		<?php endforeach ;//{}と一緒の役割?>
	</table>
</div>
