<form action="/access/index" name="edit_form" method="POST">
	<div align="center">
		<input type="text" name="header_edit"
				value="<?=htmlspecialchars($_POST['header_edit'])?>"><br>

		<textarea cols="55" rows="15" name="message_edit">
			<?=htmlspecialchars($_POST['message_edit'])?>
		</textarea><br>

		<input type="submit" value="edit" name="edit">
	</div>
</form>
