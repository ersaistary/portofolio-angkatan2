<?php 
    include 'config/koneksi.php';
    //mumculkan semua data dari table dari yang besar ke kecil

    $query = mysqli_query($config, "SELECT * FROM users ORDER BY id desc");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $queryDelete = mysqli_query($config, "DELETE FROM users WHERE id='$id'");
        header("location:user.php?hapus=berhasil");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        <?php include 'inc/header.php'; ?>

        <!-- Content -->
        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-center">Data user</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <div align="right"class="mb-3">
                                    <a href="tambah-user.php?level=<?php echo base64_encode($_SESSION['LEVEL'])?>" class="btn btn-primary">Tambah</a>
                                </div>
                                    <table class="table table-hover table-bordered border-secondary-subtle">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($row as $key => $data): ?>
                                                <tr>
                                                    <td class="text-center"><?= $key + 1 ?></td>
                                                    <td><?= $data ['name']?></td>
                                                    <td><?= $data ['email']?></td>
                                                    <td class="text-center">
                                                        <a href="tambah-user.php?edit=<?php echo $data['id']?> &level=<?php echo base64_encode($_SESSION['LEVEL']) ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <a href="user.php?delete=<?php echo $data['id']?>" onclick="return confirm('Are you sure?')"  class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>