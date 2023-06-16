<link rel="stylesheet" href="<?= base_url('assets/css/artikel.css');?>">


<h1>List artikel Admin</h1>
    <a href="<?= base_url('index.php/artikel/tambah'); ?>">Tambah artikel</a>
    <table class="admin-table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php foreach ($artikel as $row): ?>
        <tbody>
            <tr>
                <td><?= $row->judul; ?></td>
                <td><?= $row->isi_artikel; ?></td>
                <td>
                    <a href="<?= base_url('index.php/artikel/hapus/'.$row->id_artikel); ?>">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>