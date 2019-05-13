<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Rekap Data Guru</title>
    <style type="text/css">
        h1 {
            text-align:center;
            font-size:18px;
        }

        table {
            font-size:10px;
            border-collapse: collapse;
        }
        .zebra {
            background-color:#CCCCCC;
        }
        th, td {
            padding: 4px 2px;
        }
        th, tfoot tr td {
            background-color: #999999;
        }
    </style>
</head>

<body>
    <h1>Rekap Data Siswa</h1>

    <?php $i = 0 ?>
    <table width="600" border="0">
        <thead>
            <tr>
                <th style="padding-right: 20px;">No</th>
                <th style="padding-right: 20px;">Nama</th>
                <th style="padding-right: 20px;">NIS</th>
                <th style="padding-right: 20px;">Kelas</th>
                <th style="padding-right: 20px;">Tempat tgl lahir</th>
                <th style="padding-right: 20px;">JK</th>
                <th style="padding-right: 20px;">No Handphone</th>
                <th style="padding-right: 20px;">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $sw): ?>
                <?= ($i & 1) ? '<tr class="zebra">' : '<tr>'; ?>
                <td style="padding-right: 20px;" width="30"><?= ++$i ?></td>
                <td style="padding-right: 20px;"><?= $sw->nama; ?>
                </td>
                <td style="padding-right: 20px;"><?= $sw->nik; ?></td>
                <td style="padding-right: 20px;"><?= $sw->nama_ruangan; ?></td>
                <td style="padding-right: 20px;"><?= $sw->ttl; ?></td>
                <td style="padding-right: 20px;"><?= $sw->jk; ?></td>
                <td style="padding-right: 20px;"><?= $sw->nope; ?></td>
                <td style="padding-right: 20px;"><?= $sw->alamat; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

</body>
</html>