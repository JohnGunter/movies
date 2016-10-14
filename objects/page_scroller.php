<?
$begin_record=$GLOBALS[offset] + 1;
$end_record=$GLOBALS[offset] + $GLOBALS[item_perpage];
$prev=$GLOBALS[offset] - $GLOBALS[item_perpage];
$next=$GLOBALS[offset] + $GLOBALS[item_perpage];
if ($end_record > $total_record) {$end_record=$total_record;}
$page_map="$begin_record to $end_record of $total_record";
if ($prev < 0) {$prev="";}
else {$prev=href("$action?offset=".$prev, "&lt;&lt; PREV");}
if ($total_record > $next) {$next=href("$action?offset=".$next, "NEXT &gt;&gt;");}
else {$next="";}
?>