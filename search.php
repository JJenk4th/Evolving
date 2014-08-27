<?php
require "index.php";






if(isset($_SESSION["name"])){
	$results=$dbh->query("Select `name`,`id` from `users`");
echo "<table border=\"1\">";
while ($row=$results->fetch()) {
	echo "<tr><td>{$row->id}</td><td>{$row->name}</td></tr>";
}

echo "</table>";




}else{

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
	<input  type="submit" name="submit" value="Search">
