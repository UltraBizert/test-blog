<div align="right">
	<form action="/access" method="POST">
		<input type="submit" value="log out" name="logout">
	</form>
</div>
<div class="container">
	<div class="col-xs-12 col-sm-9">
		<h1>Messages</h1>
		<?php if(isset($_SESSION['user_id'])):?>
		<form action="/access/message" method="POST">
			<input type="submit" value="New massage" name="new_message">
		</form>
		<?php endif; ?>
		<div class="row">
			<?php if($data['result']>0): ?>
			<?php while($res = mysql_fetch_array($data['query'])): ?>

			<div class="col-xs-6 col-lg-4">
				<h2><?=$res['header_message']?></h2>
				<p><?=$res['message']?></p>
				<p><?=$res['id']?></p>
			<?php if($res['user_id'] === $_SESSION['user_id']):?>
				<form action="/access/index" method="POST">
					<input type="submit" name="delete" value="delete"> 
					<input type="submit" name="edit" value="edit">
					<input type="submit" name="comment" value="add comment">
					<input type="hidden" name="user_id" value="<?=$res['id']?>">
				</form>
			<?php endif; ?>
			</div><!--/.col-xs-6.col-lg-4-->
			<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
	<div class="col-md-12 center-block">
		<div class="row">
			<?= GetNav($data['p'], $data['num_pages'],'access', 'index');?>
		</div>
	</div>
</div>
