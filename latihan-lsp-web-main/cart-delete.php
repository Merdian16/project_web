<?php 

session_start();

$id = $_GET['id'];
unset($_SESSION["cart"][$id]);
echo "<script type='text/javascript'>
alert('Successfully Removed');
window.location = 'cart.php';
</script>";

if(isset($_SESSION["cart"]) < 0) {
    echo "
    <script>
        alert('Your shopping cart is empty! Please shop first');
        window.location = 'index.php';
    </script>";
}



?>