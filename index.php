<?php 
require "include.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thot Life</title>
	<style type="text/css">
	#menudiv{
		width: 100%;
        text-align: center;
	}
	#menu{
		background:purple;
 		margin:10px auto;
 		display: inline-block;
 		}
	.menuitem{
		background: lightgray;
     display:block;
     float:left;
     padding:10px 20px;

	}
	.menuitem:hover{
	 background: gray;
	}




	</style>
</head>
<body>
<div id="menudiv">
<ui id="menu">
	<li class="menuitem"><a href="index.php">Home</a></li>
	<li class="menuitem"><a href="posts.php">Posts</a></li>
	<li class="menuitem"><a href="search.php">Search</a></li>
	<?php
	if(isset($_SESSION["name"])){
		echo '<li class="menuitem"><a href="login.php?submit=logout">Logout</a></li>';


	}
	?>
	


	<li class="menuitem"><a href="login.php">Register/Login</a></li>

	<?php
	if(isset($_SESSION["name"])){
		echo '<li class="menuitem">Hello '. $_SESSION["name"]. ' </li>';


	}
	?>

</ui>
</div>

<?php 



?>














</body>
</html>