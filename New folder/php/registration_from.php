<?php
session_start();

?>
<?php
include '../database/dbcon.php';
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con ,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phonenumber = mysqli_real_escape_string($con,$_POST['phonenumber']);
    $country = mysqli_real_escape_string($con,$_POST['country']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $repassword = mysqli_real_escape_string($con,$_POST['repassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $repass = password_hash($repassword, PASSWORD_BCRYPT);

    $emailquery = "select * from  registration where email='$email'";

    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if ($emailcount>0) {
        ?>
            <script>
                alert ("email already exists");
            </script>
        <?php
        // header('location: ../login.html');
    }else{
        if($password === $repassword){
            $insertquery = "INSERT INTO `registration`(`username`, `email`, `phonenumber`, `country`, `password`, `repassword`) VALUES ('$username','$email','$phonenumber','$country','$pass','$repass')";
            $iquery = mysqli_query($con, $insertquery);
            if ($iquery){
                ?>
                    <script>
                        alert ("inserted");
                    </script>
                <?php
                header('location: ../index.php');
            }else{
                ?>
                <script>
                    alert ("not inserted");
                </script>
                <?php
                // header('location: ../login.html');
            }
        }else{
            ?>
                <script>
                    alert("password are not matching");
                </script>
            <?php
            // header('location: ../login.html');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teentaj Login</title>
    <link rel="stylesheet" href="../css/login-form.style.css">
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
            <form action="login_form.php" method="POST">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" name="email" type="text" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
                <button type="submit" name="submit" class="button">Sign In</button>
				</div>
                </form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
        </form>     
        <form action="" method="POST">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="username" type="text" class="input" required>
				</div>
                <div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" name="email" type="text" class="input" required>
				</div>
                <div class="group">
					<label for="pass" class="label">Phone Number</label>
					<input id="pass" name="phonenumber" type="text" class="input" required>
				</div>
                <div class="group">
					<label for="pass" class="label">Country</label>
					<input id="pass" name="country" type="text" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" name="repassword" class="input" data-type="password" required>
				</div>
				<div class="group">
                    <button type="submit" name="submit" class="button">Create account</button>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
        </form>
		</div>
	</div>
</div>
</body>
</html>
