<?php 

session_start();
$id = $_GET['id'];
unset($_SESSION["cart"][$id]);
echo "<script type='text/javascript'>
alert('Product has been Deleted!');
window.location = 'index.php'
</script>";

if (isset($_SESSION["cart"]) < 0) {
    echo "
    <script>
        alert('Your Cart is Empty, Lets Go to Shop!')
        window.location = 'index.php'
    </script>";
}



?>
