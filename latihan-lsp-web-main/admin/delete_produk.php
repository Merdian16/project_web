<?php

require 'functions.php';

$id = $_GET['id'];

if(hapusProduk($id) > 0 ){
    echo"
    <script type='text/javascript'>
        alert('Product data deleted successfully');
        window.location = 'product.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Product data failed to delete');
        window.location = 'product.php';
    </script>
    ";
}




?>

