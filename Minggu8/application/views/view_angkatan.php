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
        <th>Tahun</th>
    </tr>
    <?php 
        $nomor=1;
        foreach($Mahasiswa as $row)
        {
            ?>
        <tr>
            <td><?= $nomor; ?>.</td>
            <td><?= $row["tahun"]; ?></td>
        </tr>
        <?php $nomor++; ?>
        <?php
        }
        ?>
    