<?php include_once "_header.php"; ?>

<?php
    $page = "home";
    $category = "";

    if(isset($_GET['page']) and !empty($_GET['page']))
        $page=$_GET['page'];	/* gets the variable $page */

    if(isset($_GET['category']) and !empty($_GET['category']))
        $category=$_GET['category']."/";	/* gets the variable $page */

    include($category."".$page.".php");
//    if (!empty($page)) {
//        include($page);
//    } 	/* if $page has a value, include it */
//    else {
//        include('home.php');
//    } 	/* otherwise, include the default page */

?>

<?php include_once "_footer.php"; ?>