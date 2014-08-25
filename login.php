<?php
require 'index.php';








if (isset($_POST["submit"]) AND $_POST["submit"]=='login') {

	$sqlstr = "select id,name,height
	from `users` 
	where `name` = \"{$_POST['username']}\" 
	and 
	`password` = \"{$_POST['password']}\" ";

	// echo $sqlstr;
  $result = $dbh->query($sqlstr);

  if($result->rowCount())
  { 
  	$row = $result->fetch();
 

  	echo "You're In";

  	if(isset($_SESSION['count']) ==false)
  	{
  		$_SESSION['count']=0;
  	}
  
  	$_SESSION['count']++;
  	$_SESSION['loggedin']=true;
  	$_SESSION['name']=$row->name;
    header("Location: http://localhost/posts.php"); /* Redirect browser */

  }else{
  	echo "Wrong password or User";
  }

}elseif (isset($_POST["submit"]) AND $_POST["submit"]=='register')
{


echo "<br>You're Trying to Fucking Register<br>";
$sqlstr = "INSERT INTO `users` (name, password)
VALUES 

(\"{$_POST['username']}\" 
	, \"{$_POST['password']}\" )";

	// echo $sqlstr;
  $result = $dbh->query($sqlstr);

  if($result->rowCount())
  { 
  		echo "Thank You for Signing Up Slut!";
  }

}elseif (isset($_GET["submit"]) AND $_GET["submit"]=='logout') {

	session_destroy();
	unset($_SESSION);

}

if(isset($_SESSION['loggedin']) == false)
{
?>
<p>login</p>
<form action="login.php" method="post">
	username: <input type="text" name="username"><br>
  password: <input type="password" name="password"><br>
   <input type="submit" name="submit" value="login"><br>

</form> <p>register</p>
<form action="login.php" method="post">
	username: <input type="text" name="username"><br>
  password: <input type="password" name="password"><br>
   <input type="submit" name="submit" value="register"><br>

</form>




<?php
}





echo "<BR><BR><BR><BR><BR><BR><BR><pre>";
var_dump($_POST,isset($_SESSION)?$_SESSION:"No Sesison",$_GET);








?>