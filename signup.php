<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="signup.css">

</head>
<body>

<h2>SIGNUP FORM</h2>

<form action="registration.php" method="POST">
  <div class="imgcontainer">
    <img src="https://www.iconbunny.com/icons/media/catalog/product/1/2/1282.12-business-woman-icon-iconbunny.jpg" alt="Avatar" class="avatar" style="width: 100px; height: 100px;">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Phone number</b></label>
    <input type="text" placeholder="Enter number" name="num" required>
    <label for="psw"><b>Gender</b></label>
    <input type="text" placeholder="Enter gender" name="gen" required>
    <label for="psw"><b>Age</b></label>
    <input type="text" placeholder="Enter age" name="age" required>
        
    <button type="submit">Sign-up</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
<br>
<br>
<br>
<label for="sign"><b>Already have an account?</b></label><a href="http://localhost/login/login.php">  Log In</a>
<br>
<br>
    <button type="button" class="cancelbtn">Cancel</button>
</div>
</form>

</body>
</html>