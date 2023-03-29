<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello</h1>
     <h1>Name :  <?php echo $_SESSION['name']?></h1>
     <h1>Username : <?php echo $_SESSION['user_name']; ?></h1>
     <nav class="home-nav">
     	<a href="change-password.php">Update Password</a>
     	<a href="change-username.php">Update User Name</a>
     	<!-- <a href="change-username.php">Dek</a> -->
     	<a href="delete-account.php">Delete Account</a>
     	<!-- <a href="change-password.php">Update </a> -->
        <a href="logout.php">Logout</a>
     </nav>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>