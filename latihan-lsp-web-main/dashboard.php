<?php include 'layout/navbar.php'; ?>
<?php 

$data = query("SELECT * FROM transaksi WHERE name ='{$_SESSION['name']}'");
?>
<?php if (!isset($_SESSION["username"])) :
    echo "<script>
           alert('You are not logged in, please login first!');
           window.location = 'login/index.php';
           </script>";
endif; ?>



<div class="container">

    <div class="informasi">
        <h2>Hello, Welcome to Shoppupurinta <?= $_SESSION["name"]; ?> This is your Shopping Dashboard</h2><br /> <br />

        <p>Status = Process <br /> Please be Patient, your Product is being Processed by Admin.</p>

        <p>Status = Shipped <br /> Please wait at Home, your Product is being Shipped!</p>

        <p>Status = Rijected <br /> Please Re-check your data, and Make Sure you fill in the Data Correctly!</p>     
    </div>

    <div class="data-transaksi">
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
        <?php foreach($data as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["name"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td>Rp <?= $data["harga_produk"]; ?></td>
                <td><img src="foto/<?= $data["foto_produk"]; ?>" width="80"></td>
                <td><?= $data["status"]; ?></td>
                <td>
                    <a href="detail_transaksi.php?id=<?= $data["id_transaksi"]; ?>" class="detail">Transaction Details</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>


</div>