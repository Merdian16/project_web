<?php 

session_start();



if(!isset($_SESSION["username"])) {
    echo "
    <script type='text/javascript'>
        alert('Please login first')
        window.location = '../login/index.php';
    </script>
    ";
}

require 'functions.php';


if(isset($_POST["submit"])){
    if(tambahProduk($_POST) > 0 ){
        echo "
        <script type='text/javascript'>
            alert('Product data added successfully!');
            window.location = 'product.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Product data failed to add!');
            window.location = 'product.php';
        </script>
        ";
    }
}


?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <div class="box">
        <h2>Add Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Product name</label>
            <input type="text" name="nama_produk" class="form-control"><br /><br />

            <label>Product Price</label>
            <input type="text" name="harga_produk" class="form-control"><br /><br />

            <label>Product Photos</label>
            <input type="file" name="foto_produk" class="form-control"><br /> <br />

            <label>Product Stock</label>
            <input type="text" name="stok_produk" class="form-control"><br /><br />

            <label>Product Description</label><br />
            <textarea name="deskripsi_produk" rows="10" class="form-control"></textarea><br /> <br />

            <button type="submit" name="submit">Add</button>
        </form>
    </div>
</div>