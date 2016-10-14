<table align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
				<tr>
					<td><? if (file_exists($content)) {include($content);} else { ?>
						<p class="first-linea">
						<? echo $content; ?>
						</p>
						<? } ?></td>
				</tr>
		</table></td>
	</tr>
</table>