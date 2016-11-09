<?
/********************************************************************
* dX Campaign Administration
*
* copyright: 2003 JohnPrime.com
* author: John E. Gunter
*
*********************************************************************/

function error_message ($error) {
	global $incpath;
	if ($error) {
		include("$incpath/error.php");
		$GLOBALS["content"]		=${"strError$error"};
		$GLOBALS["bartitle"]	="Error: #$error";
	}
}

function list_movies() {
	$connection = mysql_connect($_SESSION['db_host'], $_SESSION['db_user'], $_SESSION['db_pass']);
	if( !$connection ) {
		die('Could not connect to Database: '.mysql_error());
	}
	$db = mysql_select_db($_SESSION['db_test'],$connection);
	$query = "SELECT * FROM ".$_SESSION['tbl_movies']." LIMIT ".$GLOBALS['offset'].", ".$GLOBALS['item_perpage'];
	$daftar=mysql_query($query,$connection) or die("Failed to get movie list = ".$query);
	while ($buffer = mysql_fetch_array($daftar)) {$result[$c]=$buffer;$c++;}
	$GLOBALS[total_record]=mysql_result(mysql_query("SELECT count(*) FROM ".$_SESSION['tbl_movies'],$connection),0);
	mysql_close($connection);
return $result;
}

function insert_movie($data) {
	$connection = mysql_connect($_SESSION['db_host'], $_SESSION['db_user'], $_SESSION['db_pass']);
	if( !$connection ) {
		die('Could not connect to Database: '.mysql_error());
	}
	$db = mysql_select_db($_SESSION['db_test'],$connection);
	$query = "INSERT INTO ".$_SESSION['tbl_movies']." VALUES (null, '$data[title]', '$data[genre]', '$data[actor]')";
	$hasil=mysql_query($query,$connection) or die("I did not insert the movie ".$data[title]." into the database! ".$query);
}

function search_movies($data) {
	$connection = mysql_connect($_SESSION['db_host'], $_SESSION['db_user'], $_SESSION['db_pass']);
	if( !$connection ) {
		die('Could not connect to Database: '.mysql_error());
	}
	global $tbl_movies;
	$db = mysql_select_db($_SESSION['db_test'],$connection);
	$query = "SELECT * FROM ".$_SESSION['tbl_movies']." WHERE $data[search_type] LIKE '%$data[search_term]%' LIMIT ".$GLOBALS['offset'].", ".$GLOBALS['item_perpage'];
	$daftar=mysql_query($query,$connection) or die("Failed to get movie list = ".$query);
	while ($buffer = mysql_fetch_array($daftar)) {$result[$c]=$buffer;$c++;}
	$GLOBALS[total_record]=mysql_result(mysql_query("SELECT count(*) FROM ".$_SESSION['tbl_movies'],$connection),0);
	mysql_close($connection);
return $result;
}

function update_movie($data) {
	global $db_test, $tbl_movies;
	$query = "UPDATE ".$_SESSION['tbl_movies']." SET title='$data[title]', genre='$data[genre]', actor='$data[actor]' WHERE id=$data[id]";
	$hasil=mysql_db_query($_SESSION['db_test'], $query) or die ("I could not update the movie ".$data[title]." in the database! ".$query);
	
return $data[error];
}

function delete_movie($id) {
	$query = "DELETE FROM ".$_SESSION['tbl_movies']." WHERE id = $id";
	$result = mysql_db_query($_SESSION['$db_test'], $query) or die("I didn't delete the movie! ".$query);
}

?>
