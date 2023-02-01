<?php
    include_once("function/root.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes PT. Transindo Data Perkasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="Container">
        <div class="header">
            <a href="<?php echo BASE_URL."index.php";?>"></a>
        </div>

        <div class="navbar bg-primary">
            <div class="user">
                <div class="container">
                <a class="btn btn-light text-decoration-none" href="<?php echo BASE_URL."index.php?page=login";?>">Login</a>
                <a class="btn btn-light text-decoration-none" href="<?php echo BASE_URL."index.php?page=pesan_tiket";?>">Pesan tiket baru</a>
                </div>
            </div>
        </div>
        <div class="content">
            <?php
                $file = "$page.php";
                if(file_exists($file)) {
                    include_once($file);
                }
                else {
                    echo "File tidak ada";
                }
            ?>
        </div>

        <footer></footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>