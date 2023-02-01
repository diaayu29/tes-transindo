
            <?php 
                include_once("function/connection.php");

                $query = mysqli_query($koneksi, "SELECT * FROM user");
                $row = mysqli_fetch_assoc($query);
            ?>

<div class="container">
    <div class="card">
      <div class="card-body m-auto">
            <h3>Selamat datang</h3>
            <p>Selamat anda sudah memiliki tiket Berikut ID tiket anda :</p>
            <p><?php echo $row["nomor_tiket"];?></p>
            <a class="btn btn-primary" href="<?php echo BASE_URL."index.php?page=load_logout";?>">Logout</a>
      </div>
    </div>
</div>