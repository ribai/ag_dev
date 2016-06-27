<div class="lectures">

<pre>
<?php print_r($now_lecture);?>
	</pre>
	<h2>現在開講中の講義</h2>
	<table>
		<tr><th>A棟</th><th>B棟</th><th>C棟</th><th>D棟</th></tr>
		<tr><td>データベース</td><td>情報科学</td><td>インコミ</td><td>数学基礎</td></tr>
		<tr><td>データベース</td><td>情報科学</td><td>インコミ</td><td>数学基礎</td></tr>
		<tr><td>データベース</td><td>情報科学</td><td>インコミ</td><td>数学基礎</td></tr>
		<tr><td>データベース</td><td>情報科学</td><td>インコミ</td><td>数学基礎</td></tr>
		<tr><td>データベース</td><td>情報科学</td><td>インコミ</td><td>数学基礎</td></tr>
		<tr><td>データベース</td><td>情報科学</td><td>インコミ</td><td>数学基礎</td></tr>
		<tr><td>データベース</td><td>情報科学</td><td>インコミ</td><td>数学基礎</td></tr>
		<tr><td>データベース</td><td>情報科学</td><td>インコミ</td><td>数学基礎</td></tr>
	</table>
</div>

<div class="active-list">
	<h2>最新の実況</h2>
	<table>
		<tr><th>講義名</th><th>教室</th><th>時限</th><th>講師</th></tr>
		<?php foreach ($lecture as $key => $value):?>
		<tr><td><a href="/lecture/<?php echo $value["Lecture"]["id"];?>"><?php echo $value["Lecture"]["name"];?></a></td>
			  <td><?php echo $value["Lecture"]["room"];?></td>
				<td><?php echo $value["Lecture"]["time"];?></td>
				<td><?php echo $value["Lecture"]["teacher"];?></td>
		<?php endforeach ;//{}と一緒の役割?>
	</table>
</div>
