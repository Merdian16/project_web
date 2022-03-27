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

$id = $_GET["id"];
$transaksi = query("SELECT * FROM transaksi WHERE id_transaksi = $id")[0];


?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <h3>Data Transaksi</h3>


    <div class="detail-transaksi">
        <div class="foto">
            <img src="../foto/<?= $transaksi['foto_produk']; ?>" width="300px" alt="">
        </div>

        <div class="transaksi">
            <h3>Buyer's name : <?= $transaksi["name"]; ?></h3>
            <h3>Address : <?= $transaksi["alamat"]; ?></h3>
            <h3>phone number : <?= $transaksi["no_hp"]; ?></h3>
            <h3>product name : <?= $transaksi["nama_produk"]; ?></h3>
            <h3>Product Price : <?= number_format($transaksi["harga_produk"]); ?></h3>
            <h3>total price : <?= number_format($transaksi["subtotal"]); ?></h3>
            <h3>Status : <?= $transaksi["status"]; ?></h3>
            
            
            <?php
        
        if($transaksi["status"] == "proses"){
            ?>
            <div class="aksi">
                <a href="verif.php?id=<?= $transaksi["id_transaksi"]; ?>" class="verif">Verification</a>

                <a href="reject.php?id=<?= $transaksi["id_transaksi"]; ?>" class="reject">Reject</a>
            </div>
            <?php
        }elseif($transaksi["status"] == "dikirim"){
            ?>
                <button class="berhasil">Product has been shipped</button>
                <?php
        }elseif($transaksi["status"] == "ditolak"){
            ?>
                <button class="gagal">Transaction has been rejected</button>
            <?php
        }
        ?>
        </div>
        

       
    </div>


</div>