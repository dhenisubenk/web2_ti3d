<?php
$nim = htmlspecialchars($_POST['nim']);
$nama = htmlspecialchars($_POST['nama']);
$jurusan = htmlspecialchars($_POST['jurusan']);
$alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);

//cek kosong
if (empty($nim) || empty($nama) || empty($alamat)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
} else {

    //cek nim
    $cek = $con->query("SELECT * FROM mhs WHERE nim = '$nim'");

    if ($cek->rowCount() == 0) {
        //insert 
        $sql = "INSERT INTO mhs VALUES ('$nim','$nama','$jurusan','$alamat')";
        $simpan = $con->query($sql);

        if ($simpan->rowCount() > 0) {
            echo "<script>
                alert('data berhasil ditambahkan');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
        } else {
            echo "<script>
                alert('data gagal ditambahkan');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
        }
    } else {
        echo "<script>
            alert('NIM sudah ada!');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
    }
}
