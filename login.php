<?php
$servername = "localhost";
$username = " root";
$password = "";
$dbname = "mani";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
if (password_verify($password, $row['password'])) {
// Password matches, login successful
session_start();
$_SESSION['email'] = $email;
header('Location: index.html');
exit();
} else {
// Password does not match
echo "Invalid login credentials";
}
} else {
// User not found
echo "Invalid login credentials";
}
mysqli_close($conn);
}
?>
<<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Login</title>
<style>
.container1 {
display: flex;
flex-wrap: wrap;
width: 100%;
height: 10%;
margin: 0 auto;
background-color: black;
}
body {
background-color: #f8f9fa;
}
.container {
max-width: 500px;
margin: 0 auto;
padding: 20px;
background-color: #fff;
border-radius: 5px;
box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
margin-top: 50px;
}
form {
display: flex;
flex-direction: column;
}
label {
font-size: 16px;
margin-bottom: 5px;
}
input[type="email"], input[type="password"] {
padding: 10px;
font-size: 16px;
border-radius: 5px;
border: none;
margin-bottom: 15px;
}
input[type="submit"] {
padding: 10px;
font-size: 16px;
border-radius: 5px;
border: none;
background-color: #007bff;
color: #fff;
cursor: pointer;
}
input[type="submit"]:hover {
background-color: #0069d9;
}
</style>
</head>
<body>
<body>
<div class="container1">
<div class="box1"><img src="images/Veltech_Rangarajan_Dr._Sagunthala_R&D_Institute_of_Science_and_Technology_logo.png" style="width:130px;height:55px;"></div>
</div>
<div class="container">
<h1 class="text-center">Login for Vel Mart</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<label for="password">Password:</label>
<input type="password" id="password" name="password" required>
<input type="submit" value="Login">
</form>
</div>
</body>
</html>