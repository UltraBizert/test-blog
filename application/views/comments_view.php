<table border="3" cellpadding="20">
	<tr>
		<th>Autor</th>
		<th>comment</th>
	</tr>
<?php while($con=mysql_fetch_array($result2)): ?>
		 <tr><td><?=$con['user_id']?></td>
			 <td><?=$con['comment']?></td></tr>
<?php endwhile;?>
</table>

