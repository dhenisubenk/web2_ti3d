<?php
require_once '../config/fungsi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">web2<strong>ti3d</strong></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" href="index.php">Home</a>
                                <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
                                <a class="nav-link" href="index.php?page=kontak">Kontak</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <!-- isi konten -->
        <?php
        $dir = "content";
        $page = @$_GET['page'];
        if (empty($page)) {
            include 'content/home.php';
        } else {
            $scan = scanFile($dir, $page);
            if ($scan == 1) {
                include "content/$page.php";
            } else {
                include "content/404.php";
            }
        }
        ?>
        <!-- konten -->
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>