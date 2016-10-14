<?php
	echo form($action, $hidden);
?>
<table align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td class="newsHeadline" colspan="2"><?php echo $bartitle; ?></td>
	</tr>
	<tr>
		<td class="label" align="right">Movie Title:&nbsp;</td>
		<td><input class="inputField" type="text" name="title" value=""></td>
	</tr>
	<tr>
		<td class="label" align="right"><p class="formCopy">Genre:&nbsp;</p></td>
		<td><input class="inputField" type="text" name="genre" value=""></td>
	</tr>
	<tr>
		<td class="label" align="right"><p class="formCopy">Actor:&nbsp;</p></td>
		<td><input class="inputField" type="text" name="actor" value=""></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><?echo button($button)?></td>
	</tr>
</table>