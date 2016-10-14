<?php
echo form($action, $hidden);
?>
<table>
	<tr>
		<td class="newsHeadline"><?php print $bartitle; ?></td>
	</tr>
	<tr>
		<td><p class="maincopy">This page contains the information for the movies that I like most. Below you will find a list of movie titles and the actors that have made them.</p></td>
	</tr>
</table>
<table class="movieList">
	<tr>
		<th><p class="messageWhite">Title</p></th>
		<th><p class="messageWhite">Genre</p></th>
		<th><p class="messageWhite">Actor</p></th>
	</tr>
	<?php
	$no=1;
	if (sizeof($data) > 0) {
	while (list($key, $val)=each($data)) {
	$no % 2 ? $bgcolor="$color1" : $bgcolor="$color2";
	?>
	<tr>
		<td class="movieOutput" align="center" nowrap><?php echo $val[title]; ?></td>
		<td class="movieOutput" align="center"><?php echo $val[genre]; ?></td>
		<td class="movieOutput" align="center"><?php echo $val[actor]; ?></td>
	</tr>
	<?php $no++;
	}} else { ?>
	<tr>
	<td colspan="3"><p class="maincopy">No movie(s) or actor(s) found.</p></td>
	</tr>
	<?php } ?>
	<tr>
	<?php include("$objectpath/page_scroller.php"); ?>
	<td colspan="3" align="right"><table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td nowrap><p class="messageWhite"><?php if( $prev ) { echo $prev; } else { echo "&nbsp;"; } ?></p></td>
	<td align=center><p class="messageWhite"><?php echo $page_map; ?></p></td>
	<td align=right nowrap><p class="messageWhite"><?php if( $next ) { echo $next; } else { echo "&nbsp;"; } ?></p></td>
	</tr>
	</table></td>
	</tr>
</table>
<table class="buttonContainer">
	<tr>
		<td><?php echo button($button)?></td>
	</tr>
</table>
