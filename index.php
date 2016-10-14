<?
/********************************************************************
* Movie App Page
*********************************************************************/
session_start();
//error_reporting(E_ALL);

require("/home/johnprim/public_html/testing/movies/objects/config.php");
require("$objectpath/common.php");
require("$objectpath/movie_data.php");
include("/home/johnprim/public_html/testing/movies/objects/header_object.php");

$button=array("MovieApp");
$action="index.php";

switch($invoke) {
	case "Add Movie/Actor":
		$content="$rootpath/new_movie.php";
		$button=array("Save Movie", "Cancel");
		$bartitle="Add New Movie/Actor";
		break;
	case "Save Movie":
		insert_movie($HTTP_POST_VARS);
		$data=list_movies();
		$content="$rootpath/main.php";
		$button=array("Add Movie/Actor", "Search Movies");
		$bartitle="Movie Saved";
		break;
	case "Search Movies":
		$content="$rootpath/search_movie.php";
		$bartitle="Search For Movie/Actor";
		$button=array("Search", "Cancel");
		break;
	case "Search":
		$data=search_movies($HTTP_POST_VARS);
		$content="$rootpath/main.php";
		$bartitle="Search Results For $search_term";
		$button=array("Add Movie/Actor", "Search Movies");
		break;
	default:
	$data=list_movies();
	$content="$rootpath/main.php";
	$button=array("Add Movie/Actor", "Search Movies");
	$bartitle="Favorite Movies";
}

include("$rootpath/body.php");
include("$objectpath/footer.php");

?>