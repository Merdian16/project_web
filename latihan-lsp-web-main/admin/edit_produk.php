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
    if(editProduk($_POST) > 0 ){
        echo "
        <script type='text/javascript'>
            alert('Product data changed successfully!');
            window.location = 'product.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Product data failed to change!');
            window.location = 'product.php';
        </script>
        ";
    }
}

$id = $_GET["id"];
$data = query("SELECT * FROM produk WHERE id_produk = $id")[0];


?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <div class="box">
        <h2>Product Edit</h2>
        <form method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id_produk" value="<?= $data["id_produk"];
             ?>" class="form-control" id="">

            <label>Product name</label>
            <input type="text" name="nama_produk" class="form-control" 
            value="<?= $data['nama_produk']; ?>"><br /><br />

            <label>Product Price</label>
            <input type="text" name="harga_produk" class="form-control" value="<?= $data['harga_produk']; ?>"><br /><br />

            <label>Product Photos</label>
            <input type="file" name="foto_produk" class="form-control" value="<?= $data['foto_produk']; ?>"><br /> <br />

            <label>Product Stock</label>
            <input type="text" name="stok_produk" class="form-control" value="<?= $data["stok_produk"]; ?>"><br /><br />

            <label>Product Description</label><br />
            <textarea name="deskripsi_produk" rows="10" class="form-control"><?= $data["deskripsi_produk"]; ?></textarea><br /> <br />

            <button type="submit" name="submit">Edit</button>
        </form>
    </div>
</div>