<?php 

include '../database/dbcon.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
if (isset($_POST['order'])) {

    $query1 = "INSERT INTO `order_contact`(`email`, `fir_name`, `last_name`, `apartment`, `address`, `country`, `city`, `zip_code`) VALUES ('$_POST[email]','$_POST[fir_name]','$_POST[last_name]','$_POST[apartment]','$_POST[address]','$_POST[country]','$_POST[city]','$_POST[zip_code]')";
   if (mysqli_query($con,$query1)) {
    $order_id = mysqli_insert_id($con);
    $query2 = "INSERT INTO `user_order`(`order_id`,`item_name`, `price`, `quantity`) VALUES ('?','?','?')";
    $stmt = mysqli_prepare($con,$query2);

    if ($stmt) {

       mysqli_stmt_bind_param($stmt,"isii", $order_id, $item_name, $price, $quantity);
       foreach($_SESSION['cart'] as $key => $value) 
       {
        $item_name = $value['item_name'];
        $price = $value['price'];
        $quantity = $value['quantity'];
        mysqli_stmt_execute($stmt);
       }
       unset($_SESSION['cart']);
    }else{
        echo "<script>
        alert('SQL Query Prepare error');
        window.location.href='index.php';
        </script>";
    }

   } 
}

}
?>