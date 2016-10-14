<?
/********************************************************************
*	Configuration document
*********************************************************************/

#---------------------------------------database configuration

  $_SESSION['db_user']   = "username";
  $_SESSION['db_pass']    = "password";
  $_SESSION['db_test'] = "db_name";
  $_SESSION['db_host']    = "localhost";

	$link = mysql_connect($_SESSION['db_host'], $_SESSION['db_user'], $_SESSION['db_pass']);
	if( !$link ) {
		 die("Unable to connect to SQL server: ". mysql_error());
	}

#---------------------------------------tables configuration

  $_SESSION['tbl_movies'] = "movies";

#---------------------------------------path configuration

  $rootpath	= "/home/johnprim/public_html/testing/movies";
  $objectpath = "$rootpath/objects";

#---------------------------------------admin email

  $admin_email		= "webmaster@johnprime.com"; # change this to your email
  
#---------------------------------------url configuration

  $rooturl = "/testing/movies";

#---------------------------------------page scroller configuration

	$GLOBALS['item_perpage'] = 30;   #----change this to define how many item per page
	$GLOBALS['offset'] = 0;
	$GLOBALS['prev']= $GLOBALS['offset']-$GLOBALS['item_perpage'];
	$GLOBALS['next']= $GLOBALS['offset']+$GLOBALS['item_perpage'];
  
?>