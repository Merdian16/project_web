<?php 

session_start();



if(!isset($_SESSION["username"])) {
    echo "
    <script type='text/javascript'>
        alert('Please Login First!')
        window.location = '../login/index.php';
    </script>
    ";
}

require 'functions.php';
$produk = query("SELECT * FROM transaksi");


?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <h3>Transaction Data</h3>

    <table>
        <tr>
            <th>Number</th>
            <th>Full Name</th>
            <th>Product Name</th>
            <th>Address</th>
            <th>Product Price</th>
            <th>Product Photo</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($produk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["name"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td>Rp <?= $data["harga_produk"]; ?></td>
                <td><img src="../foto/<?= $data["foto_produk"]; ?>" width="80"></td>
                <td><?= $data["status"]; ?></td>
                <td>
                    <a href="detail_transaksi.php?id=<?= $data["id_transaksi"]; ?>" class="edit">Details</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</div>