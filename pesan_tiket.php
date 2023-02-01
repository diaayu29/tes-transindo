<div class="user-akses">
    <?php 
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
      if($notif == "password") {
        echo "<p class='bg-danger text-white p-2 text-center'>Sandi yang anda masukkan tidak cocok</p>";
      }
    ?>
    <div class="container">
        <form method="POST" action="<?php echo BASE_URL."load_pesan.php";?>">
            <div class="mb-3">
              <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
            </div>
            <div class="mb-3">
              <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" required>
            </div>
            <div class="mb-3">
              <label for="email_address" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email_address" id="email_address" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Ulangi Password</label>
              <input type="password" name="repassword" class="form-control" id="repassword" required>
            </div>
            <button type="submit" value="pesan_tiket" class="btn btn-primary">Submit</button>
          </form>
      </div>
</div>