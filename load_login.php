<?php 
        include_once("function/root.php");
        include_once("function/connection.php");

        $nomor_tiket = $_POST['nomor_tiket'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE nomor_tiket='$nomor_tiket' AND password='$password'");



        if(mysqli_num_rows($query) != 0 ) {
            session_start();
            $row = mysqli_fetch_assoc($query);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['role'] = $row['role'];

            header("location: ".BASE_URL."index.php?page=sudah_pesan");
            echo $query;
        } else if($row['role'] == "admin") {
            header("location: ".BASE_URL."index.php?page=admin");
        }


        // echo $row['nama'];
?>
