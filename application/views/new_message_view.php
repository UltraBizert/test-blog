<form action="/access/message" method="POST">
	<div align="center">
		<input type="tex	t" name="message_header" placeholder="Message header"
				value='<?=filter_input(INPUT_POST, 'message_header')?>'><br>

		<textarea cols="55" rows="15" name="message" placeholder="Message">
			<?=filter_input(INPUT_POST, 'message')?>
		</textarea><br>
		tnser

		<input type="submit" value="Save" name="save">
	</div>
</form>
