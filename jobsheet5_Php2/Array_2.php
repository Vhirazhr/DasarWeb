<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dosen Info</title>
        <link rel="stylesheet" href="Array_2CSS.css"> 
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis_Kelamin' => 'Perempuan'
        ];
        ?>

        <h2>Informasi Dosen</h2>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen['Domisili']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen['Jenis_Kelamin']; ?></td>
            </tr>
        </table>
    </body>
</html>
