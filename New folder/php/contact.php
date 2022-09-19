<?php
session_start();

?>
<?php
include '../database/dbcon.php';
if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($con ,$_POST['first_name']);
    $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
    $phone_number = mysqli_real_escape_string($con,$_POST['phone_number']);
    $Country = mysqli_real_escape_string($con,$_POST['Country']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con,$_POST['message']);
    $mind = mysqli_real_escape_string($con,$_POST['mind']);
    $get_back = mysqli_real_escape_string($con, $_POST['get_back']);


        
    $insertquery = "INSERT INTO `idcontact`(`first_name`, `last_name`, `phone_number`, `Country`, `email`, `message`, `mind`, `get_back`) VALUES ('$first_name','$last_name','$phone_number','$Country','$email','$message','$mind','$get_back')";
            $iquery = mysqli_query($con, $insertquery);
            if ($iquery){
                ?>
                    <script>
                        alert ("inserted");
                    </script>
                <?php
                header('location: ../index.html');
            }else{
                ?>
                <script>
                    alert ("not inserted");
                </script>
                <?php
                // header('location: ../login.html');
            }
       
    }
?>