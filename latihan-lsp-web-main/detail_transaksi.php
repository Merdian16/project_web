<?php include 'layout/navbar.php'; ?>
<?php 

$id = $_GET["id"];
$transaksi = query("SELECT * FROM transaksi WHERE id_transaksi = '$id'")[0];

?>



<div class="container">
<div class="detail-transaksi">
        <div class="foto">
            <img src="foto/<?= $transaksi['foto_produk']; ?>" width="250px" alt="">
        </div>

        <div class="transaksi">
            <h3>buyer's name : <?= $transaksi["name"]; ?></h3>
            <h3>address : <?= $transaksi["alamat"]; ?></h3>
            <h3>phone number : <?= $transaksi["no_hp"]; ?></h3>
            <h3>product name : <?= $transaksi["nama_produk"]; ?></h3>
            <h3>price name : <?= number_format($transaksi["harga_produk"]); ?></h3>
            <h3>total price : <?= number_format($transaksi["subtotal"]); ?></h3>
            <h3>Status : <?= $transaksi["status"]; ?></h3>

            <?php
        
        if($transaksi["status"] == "proses"){
            ?>
                <button class="proses">Your order is being processed, be patient</button>
            <?php
        }elseif($transaksi["status"] == "dikirim"){
            ?>
                <button class="dikirim">Your order is being shipped, wait for the front of the house</button>
            <?php
        }elseif($transaksi["status"] == "ditolak"){
            ?>
                <button class="ditolak">Your order was rejected, make sure to fill in the data correctly!</button>
            <?php
        }

        ?>
        </div>

        

      

       
    </div>
</div>