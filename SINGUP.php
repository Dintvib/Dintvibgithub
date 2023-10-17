<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Sign Up</title>
<style>
.container1 {
display: flex;
flex-wrap: wrap;
width: 100%;
height: 10%;
margin: 0 auto;
background-color: black;
}
</style>
</head>
<body>
<div class="container1">
<div class="box1"><img src="images/veltech log.png" style="width:130px;height:55px;"></div>
</div>
<div class="container">
<h1 class="text-center mt-5">Sign Up for Vel Mart</h1>
<form class="mt-5" method="POST" action="register.php">
<div class="form-group">
<label for="name">Full Name</label>
<input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
</div>
<div class="form-group">
<label for="confirm-password">Confirm Password</label>
<input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm your password">
</div>
<button type="submit" class="btn btn-primary btn-block" onclick="submitForm()">Sign Up</button>
</form>
</div>
</body>
</html>