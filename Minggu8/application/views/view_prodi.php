<table border="1" cellspacing="0">
    <tr>
    <style>
        th {
            padding: 10px;
        }
        td {
            text-align: center;
        }
    </style>
        <th>No</th>
        <th>Prodi</th>
        <th>Keterangan</th>
    </tr>
    <?php 
        $nomor=1;
        foreach($Mahasiswa as $row)
        {
            ?>
        <tr>
            <td><?= $nomor; ?>.</td>
            <td><?= $row["prodi"]; ?></td>
            <td><?= $row["keterangan"]; ?></td>
        </tr>
        <?php $nomor++; ?>
        <?php
        }
        ?>
    