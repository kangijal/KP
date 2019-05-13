<form method="POST" action="<?= base_url() ?>admin/akademik/simpanjadwal">
    <input name="id" value="<?= $jadwal["0"]["id"] ?>" hidden>
    <input readonly value="<?= $jadwal["0"]["nur"] ?>">
    <input readonly value="<?= $jadwal["0"]["ratih"] ?>">
    <input readonly value="<?= $jadwal["0"]["alvri"] ?>">
    <select name="mapel">
        <option value="">Pilih...</option>
        <?php foreach ($mapel as $mapel_value) { ?>
            <option value="<?= $mapel_value["id"] ?>"<?= $mapel_value["id"] === $jadwal["0"]["id_mapel"] ? " selected" : "" ?>><?= $mapel_value["nama_mapel"] ?></option>
        <?php } ?>
    </select>
    <button type="submit">simpan</button>
<form>