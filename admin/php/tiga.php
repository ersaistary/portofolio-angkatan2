<?php 
    $siswa = [
        [
            "nama" => "budi",
            "umur" => 25,
            "jurusan" => "Web programming",
            "status" => 1,
        ],
        [
            "nama" => "reja",
            "umur" => 25,
            "jurusan" => "Web programming",
            "status" => 1,
        ],
    ];

    function ubahStatus($status){
        switch($status){
            case '1':
                echo "aktif";
                break;
            default:
                echo "tidak aktif";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h1>Data siswa</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jurusan</th>
                <th>Status</th>
            </tr>

            <tbody>
                <?php foreach($siswa as $key => $sw){ ?>
                    <tr>
                        <td><?php echo $sw['nama'] ?></td>
                        <td><?php echo $sw['umur'] ?></td>
                        <td><?php echo $sw['jurusan'] ?></td>
                        <td>
                            <?php 
                                echo ubahStatus($sw['status']);
                            ?>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </thead>
    </table>
</body>
</html>