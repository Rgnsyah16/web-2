<?= $this->extend('admin/template') ?>

<?= $this->Section('main') ?>
<div class="container">
    <h1 class=" mb-4">Daftar Buku</h1>
    <?php
    if (isset($_SESSION['berhasil'])):
    ?>
        <div class="alert alert-success mb-3">
            <strong>success</strong><?php $_SESSION['berhasil'] ?>
        </div>
    <?php
        unset($_SESSION['berhasil']); //menghapus sesion berhasil
    endif;
    ?>
    <?php
    if (isset($_SESSION['error'])):
    ?>
        <div class="alert alert-danger mb-3">
            <strong>success</strong><?php $_SESSION['gagal'] ?>
        </div>
    <?php
        unset($_SESSION['error']);
    endif;
    ?>
    <div class="my-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class="bi-plus-circle-fill"></i> Tambah</button>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">PEngarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book): ?>
                        <tr>
                            <th scope="row"><?= $book['id'] ?></th>
                            <td><?= $book['judul'] ?></td>
                            <td><?= $book['pengarang'] ?></td>
                            <td><?= $book['penerbit'] ?></td>
                            <td><?= $book['tahun'] ?></td>
                            <td><?= $book['cover'] ?></td>
                            <td>
                                <img src="<?=?>" alt="" style="width: 150px; height: auto;">
                            </td>
                            <td><?= $book['harga'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($Data->getData() as $buku): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $buku->getJudul(); ?></td>
                            <td><?php echo $buku->getPengarang(); ?></td>
                            <td><?php echo $buku->getPenerbit(); ?></td>
                            <td><?php echo $buku->getTahun(); ?></td>
                            <td>
                                <a href="/index.php/edit?id=<?php echo $buku->getId(); ?>" class="btn btn-success"><i class="bi-pencil-square"></i> Edit</a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="<?php echo $buku->getId(); ?>"><i class="bi-trash"></i> Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Buku -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("/index.php/buku/simpan") ?>" id="formTambah" method="POST" ancytpe="multipart/form-data" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="Judul" class="col-sm-4 col-form-label">Judul </label>
                        <div class="col-sm-8">
                            <input type="text" name="Judul" id="Judul" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pengarang" class="col-sm-4 col-form-label">Pengarang</label>
                        <div class="col-sm-8">
                            <input type="text" name="pengarang" id="pengarang" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="penerbit" class="col-sm-4 col-form-label">Penerbit</label>
                        <div class="col-sm-8">
                            <input type="text" name="penerbit" id="penerbit" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-4 col-form-label">Tahun </label>
                        <div class="col-sm-8">
                            <input type="text" name="tahun" id="tahun" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="cover">cover</label>
                            <input type="file" nama="civer" accept="image/*" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="harga">Harga</label>
                            <input type="text" nama="harga" id="harga" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi-floppy"></i> Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hapusModalLabel">Konfirmasi Hapus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/index.php/buku/hapus" id="formHapus" method="POST">
                    <input type="hidden" name="id_hapus" id="hidden_id">
                </form>
                <p>Apakah anda yakin ingin menghapus data dengan id <span id="text_id">. . .</span>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formHapus" class="btn btn-danger"><i class="bi-trash"></i> Hapus</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    <?= $this->endSection('admin/template') ?>