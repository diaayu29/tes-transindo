<?php 
        include_once("function/root.php");
        include_once("function/connection.php");

        $nama = $_POST['nama_lengkap'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $email_address = $_POST['email_address'];
        $nomor_tiket = rand();
        $password = md5($_POST['password']);
        $role = "user";
        $email_verified_at = null;
        $repassword = md5($_POST['repassword']);
        $check_in = 0;
        
        if($password != $repassword) {
                header ("location: ".BASE_URL."index.php?page=pesan_tiket&notif=password");
        } else {
        mysqli_query($koneksi, "INSERT INTO user(nama, email, nomor_telepon, password, nomor_tiket, role, check_in) VALUES ('$nama', '$email_address', '$nomor_telepon', '$password', '$nomor_tiket', '$role', '$check_in')");
        header ("location: ".BASE_URL."index.php?page=sudah_pesan");
        }
?>