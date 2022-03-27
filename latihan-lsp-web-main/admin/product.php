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
$produk = query("SELECT * FROM produk");


?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <h3>Product data</h3>
    <a href="tambah_produk.php" class="tambah">Add products</a>

    <table>
        <tr>
            <th>No</th>
            <th>Name Product</th>
            <th>Price Product</th>
            <th>Product photos</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($produk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp <?= number_format($data["harga_produk"]); ?></td>
                <td><img src="../foto/<?= $data["foto_produk"]; ?>" width="80"></td>
                <td><?php echo $data['stok_produk']; ?></td>
                <td>
                    <a href="edit_produk.php?id=<?= $data["id_produk"]; ?>" class="edit">Product edit</a>
                    
                    <a href="delete_produk.php?id=<?= $data["id_produk"]; ?>" onclick="return confirm('Are you sure you want to delete?')" class="hapus">Remove Product</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</div>