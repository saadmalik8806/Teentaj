<!---Login start-->
<?php
session_start();

include '../database/dbcon.php';


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email='$email'";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);
       $db_pass = $email_pass ['password'];

        $_SESSION['username'] = $email_pass['username'];

       $pass_decode = password_verify($password, $db_pass);
       if ($pass_decode) {
        ?> 
        <script>
        alert ("login successful");
        </script>
        <?php
        header('location: ../index.php');
    }
       else{
        ?>
        <script>
        alert ("password incorrect");
        location.replace("registration_from.php");
        </script>
        <?php
        // header('location: registration_form.php');

       }
    }else{
        ?>
        <script>
        alert ("invalid email");
        location.replace("registration_from.php");
        </script>
        <?php
    }
}


?>
