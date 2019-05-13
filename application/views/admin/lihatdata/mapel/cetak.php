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
            padding-right: 150px;
        }
        th, tfoot tr td {
            background-color: #999999;
        }
    </style>
</head>

<body>
    <h1>Rekap Data Mata Pelajaran</h1>

    <?php $i = 0 ?>
    <table width="600" border="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Mata Pelajaran</th>
                <th>Nama Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 1; ?>
            <?php foreach($mapel as $sw) : ?>
                <tr class="gradeX">
                    <td><?= $nomor;?> </td>
                    <?php $nomor++;?>
                    <td><?= $sw->id; ?>
                    </td>
                    <td><?= $sw->nama_mapel; ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>