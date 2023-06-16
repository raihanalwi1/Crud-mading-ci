<link rel="stylesheet" href="<?= base_url('assets/css/tambah.css');?>">

    <?php echo validation_errors(); ?>

    <?php echo form_open('index.php/artikel/tambah'); ?>
        <div>
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul">
        </div>

        <div>
            <label for="isi">Isi Artikel:</label>
            <textarea name="isi_artikel" id="isi" rows="5"></textarea>
        </div>

        <div>
            <input type="submit" value="Simpan">
        </div>
    <?php echo form_close(); ?>
