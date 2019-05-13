<form method="POST" action="<?= base_url() ?>admin/akademik/tambahjadwalsimpan">
    <select name="kelas">
        <option value="">Pilih...</option>
        <?php foreach ($kelas as $kelas_value) { ?>
            <option value="<?= $kelas_value["id"] ?>"><?= $kelas_value["nama_ruangan"] ?></option>
        <?php } ?>
    </select>
    <select name="mapel">
        <option value="">Pilih...</option>
        <?php foreach ($mapel as $mapel_value) { ?>
            <option value="<?= $mapel_value["id"] ?>"><?= $mapel_value["nama_mapel"] ?></option>
        <?php } ?>
    </select>
    <select name="hari">
        <option value="">Pilih...</option>
        <?php foreach ($hari as $hari_value) { ?>
            <option value="<?= $hari_value["id"] ?>"><?= $hari_value["hari"] ?></option>
        <?php } ?>
    </select>
    <select name="jam">
        <option value="">Pilih...</option>
        <?php foreach ($jam as $jam_value) { ?>
            <option value="<?= $jam_value["id"] ?>"><?= $jam_value["waktu"] ?></option>
        <?php } ?>
    </select>
    <button type="submit">simpan</button>
<form>