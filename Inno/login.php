<?php 

include 'db_connection.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: main_page.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<style>
	*{
	margin:auto;
	padding:0;
	box-sizing: border-box;
}
body {
  	background-image: url('https://source.unsplash.com/hWzrJsS8gwI/1350x700');
	}
.container{
    margin-top:90px;
	margin-left:225px;
	position:relative;
	width:300px;
	height:400px;
	background:#5678e7;
	border-radius:8px;
	box-shadow:0 6px 12px rgba(179,179,179,.7);
	z-index:1;
	overflow:hidden;
}
.box{
	position:absolute;
	width:100%;
}
.upper{
	top:0;
	height:150px;
	background:#5678e7;
	color:#fff;
	border-radius:0 0 80px 0;
}
.upper::after{
	content:"";
	position:absolute;
	top:0;
	width:100%;
	height:100%;
	background:#fff;
	z-index:-1;
}
.upper h1{
	padding:1rem 5rem 0 1.3rem;
}
.upper h3{
	padding:0 0 0 3rem;
}
.lower{
	bottom:0;
	height:250px;
	background:#fff;
	border-radius:80px 0 0 0;
}
.form{
	width:100%;
	height:100%;
	padding-top:1.6rem;
	display:flex;
	flex-direction:column;
	align-items:center;
	justify-content:space-around;
}
.input{
	position:relative;
    padding:30px 0 0 20px;
}
.input input{
    position:center;
	width:260px;
	height:45px;
	outline:none;
	padding:0 .7rem;
	border:1px solid #8c8c8c;
	border-radius:30px;
	transition:.2s;
}
.input label{
	position:absolute;
	top:28%;
	left:10px;
	font-size:.9rem;
	transition:.2s;
	padding:0 .1rem;
}
.login-btn{
    margin-top:20px;
    display: block;
    width: 70%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #5678e7;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
}
.login-btn1{
    margin-top:20px;
    display: block;
    width: 40%;
    padding: 15px 20px;
    margin-left: 130px;
    text-align: center;
    border: none;
    background: #5678e7;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
}
</style>
</head>
<body>
	<div class="main-container">
		<div class="container">
			<div class="upper box">
				<h1>Login</h1>
				<h3>To access your dashboard</h3>
			</div>
			<div class="lower box">
				<form action="" method="POST" class="login-email">
					<div class="input">
						<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
					</div>
					<button type = "submit" name="submit" class="login-btn">Login</button>
					</form>
			</div>
		</div>
	</div>
	<p class="login-btn1">Don't have an account? <a href="register.php">Register</a> Now.</p>

</body>
</html>