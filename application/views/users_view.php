<div class="container">
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Gender</th>
					<th>Date</th>
				</tr>
			</thead>
			<?php if($data['result']>0):?>
			<?php while($res = mysql_fetch_array($data['query'])): ?>
			<tbody>
				<tr>
					<td><?=$res['first_name']?></td>
					<td><?=$res['last_name']?></td>
					<td><?=$res['gender']?></td>
					<td><?=$res['date']?></td>
				</tr>
			</tbody>
			<?php endwhile; ?>
			<?php endif;?>
		</table>
	</div>
<div class="center-block">
	<span>
		<?php echo GetNav($data['p'], $data['num_pages'], 'main', 'users');?>
	</span>
</div>
</div>

