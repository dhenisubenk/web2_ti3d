<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5>Data Mahasiswa</h5>
                <hr>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formMahasiswa">
                    Tambah Mahasiswa
                </button>
                <table class="mt-2 table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>JURUSAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123</td>
                            <td>Tarjo</td>
                            <td>Ambon</td>
                            <td>Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Tarjo</td>
                            <td>Ambon</td>
                            <td>Teknik Informatika</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-2">
                        <label for="" class="form-label">NIM</label>
                        <input type="text" class="form-control" placeholder="Masukan NIM">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Jurusan</label>
                        <select name="" id="" class="form-select">
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Manajemen Informatika</option>
                            <option>Komputerisasi Akuntansi</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="" class="form-control" placeholder="Masukan Alamat.."></textarea>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>