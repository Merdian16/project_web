<?php include 'layout/navbar.php'; ?>

<?php 


$id = $_GET["id"];
$data = query("SELECT * FROM produk WHERE id_produk = $id")[0];

?>


<div class="container">
    <div class="text-detail-produk">
        <h2>product details</h2>
    </div>

    <div class="wrapper-detail-produk"> 
      <div class="item">
          <img src="foto/<?= $data["foto_produk"]; ?>" >
      </div>

      <form action="" method="POST">
          <div class="detail-produk">
              <h4 class="nama-produk">product name  : <?= $data["nama_produk"]; ?></h4>
              <p class="harga-produk">product price : <?= $data["harga_produk"]; ?></p>

              <p class="deskripsi-produk">product description : <?= $data["deskripsi_produk"]; ?></p>
              
                
                <p class="stok-produk">product stock : <?= $data["stok_produk"]; ?></p>
                <label>quantity you want to buy</label>
                <input type="number" name="qty" value="1"> <br /> <br />

                <button type="submit" name="beli">buy now</button>
          </div>
      </form>
    </div>
</div>

<?php

    if(isset($_POST["beli"])){
        $qty = $_POST["qty"];
        $_SESSION["cart"][$id] = $qty;

        echo '
        <script type="text/javascript">
            alert("Product has been added to Shopping Cart")
        </script>';

        echo '
        <script type="text/javascript">
            location = "cart.php";
        </script>
        ';
    }
?>