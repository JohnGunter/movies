<?php
	echo form($action, $hidden);
?>
<table align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td class="newsHeadline" colspan="2"><?php echo $bartitle; ?></td>
	</tr>
	<tr>
		<td class="label" align="right">Search Type:&nbsp;</td>
		<td><select name="search_type">
			<option value="title">Movie Title</option>
			<option value="genre">Genre</option>
			<option value="actor">Actor's Name</option>
		</select></td>
	</tr>
	<tr>
		<td class="label" align="right"><p class="formCopy">Search Term:&nbsp;</p></td>
		<td><input class="inputField" type="text" name="search_term" value=""></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><?echo button($button)?></td>
	</tr>
</table>