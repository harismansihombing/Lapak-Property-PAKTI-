<div class="card">
    <ul class="list-group list-group-flush">
        <?php $nik = "ee545"; ?>
        <li class="list-group-item list-group-item-action text-center"><button class="btn btn-outline-success" type="submit" style="width: 250px;">Tambah Properti</button></li>
        <li class="list-group-item list-group-item-action"><a href="<?php echo site_url() ?>welcome/properti_anda">Pengaturan Akun</a></li>
        <li class="list-group-item list-group-item-action"><?php echo anchor('crud/daftar_postingan/' . $nik, 'Daftar Postingan'); ?></li>
        <li class="list-group-item list-group-item-action"><?php echo anchor('crud/daftar_data_penyewa/' . $nik, 'Daftar Penyewa'); ?></li>
    </ul>
</div>