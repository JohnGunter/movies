<?
/********************************************************************
* Movies Administration
*
* copyright: 2016 JohnPrime.com
* author: John E. Gunter
*
*********************************************************************/

function href ($link, $text) {
return "<a class=\"charList\" href=\"$link\">$text</a>";
}

#----------------------------------------------------button manager
function button ($button, $onclick="") {
 if ($onclick) {while (list($key,$val)=each($button)) {$result.="<input type=submit name=\"invoke\" onclick=\"return $onclick\" value=\"$val\">\n";}}
 else {while (list($key,$val)=each($button)) {$result.="<input type=submit name=\"invoke\" value=\"$val\">\n";}}
 return $result;
}

#----------------------------------------------------manage form
function form ($action, $hidden, $validate="") {
 $result="<form action=\"$action\" method=post ";
 if ($validate) {$result.="onsubmit=\"return $validate\"";}
 $result.=">\n";
 if ($hidden) {
  while (list($key,$val)=each($hidden)) {$result.="<input type=hidden name=\"$key\" value=\"$val\">\n";}
 }
 return $result;
}
?>