<div class="container">
    <form method="POST" action="<?php echo BASE_URL."load_login.php";?>">
    <div class="mb-3">
        <label for="nomor_tiket" class="form-label">Nomor Tiket</label>
        <input type="text" name="nomor_tiket" class="form-control" id="nomor_tiket" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>