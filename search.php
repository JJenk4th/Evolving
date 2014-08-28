<?php
require "index.php";






if(isset($_SESSION["name"])){
	$results=$dbh->query("Select `name`,`id` from `users`");
echo "<table border=\"1\">";
while ($row=$results->fetch()) {
	echo "<tr><td>{$row->id}</td><td>{$row->name}</td><td><a href=\"search.php?id={$row->id}&submit=delete\">Be Gone!</a></td></tr>";
}

echo "</table>";

if (isset($_POST["submit"]) AND $_POST["submit"]=='search')

	echo "Select * from `users` where like \"{$_POST["name"]}\"";

if (isset($_GET["submit"]) AND $_GET["submit"]=='delete')

	echo "Delete from `users` where = \"{$_GET["name"]}\" ";
}

else{

	echo "<div>You're Not Logged In</div>";
}
    
?>
<style  type="text/css" media="screen"> 
	ul  li{ 
	  list-style-type:none; 
	} 
	</style> 

	<p>Search Users</p>
	<form  method="post" action="search.php"  id="searchform">
	<input  type="text" name="name"> 
	<input  type="submit" name="submit" value="search">
