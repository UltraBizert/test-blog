	<div align="right">
		<form action="/access" method="POST">
		<input type="submit" value="log out" name="logout">
		</form>
	</div>
	<div align="center">
		<h1>Messages</h1>
		<form action="/access/message" method="POST">
		<input type="submit" value="New massage" name="new_message">
		</form>
		<br>
		<?php
		// echo $_SESSION['say'];
		echo '<br>',GetNav($data['p'], $data['num_pages']); 
		if($data['result']>0):
			?>
		<form action="/access" method="POST">
			<table border="3" cellpadding="20">
				<tr>
					<th>Head message</th>
					<th>message</th>
					<th>Autor</th>
					<th>Activity</th>
				</tr>
			<?php while($res = mysql_fetch_array($data['query'])): ?>
				<tr>
					<td><?=$res['header_message']?></td>
					<td><?=$res['message']?></td>
					<td><?=$res['user_id']?></td>
					<td>
			<?php if($res['user_id']==$_SESSION['user_id']):?>
					<input type="submit" name="delete" value="delete"> 
					<input type="submit" name="edit" value="edit"></form>
			<?php  endif; ?>
					<input type="hidden" name="h" value="<?=$res['id']?>">
					<input type="submit" name="comment" value="add comment">
					<input type="submit" name="see_comments" value="comments">
					</td>
				</tr>
			<?php
			endwhile;
		endif;?>
		</table>
	</form>
	</div>
