<?php 
    include 'config/koneksi.php';
    //mumculkan semua data dari table dari yang besar ke kecil
    if(isset($_POST['simpan'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $query = mysqli_query($config, "INSERT INTO users (name, email, password)
        VALUES ('$name', '$email', '$password')");
        if($query){
            header("location:user.php?tambah=berhasil");
        }

    }

    $header= isset($_GET['edit'])? "Edit" : "Tambah";
    $id_user = isset($_GET['edit'])? $_GET['edit'] : '';
    $queryEdit = mysqli_query($config, "SELECT * FROM users WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if(isset($_POST['edit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $queryUpdate = mysqli_query($config, "UPDATE users SET name = '$name', email = '$email', password='$password' WHERE id = '$id_user'");
        if ($queryUpdate){
            header("location:user.php? ubah=berhasil");
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        <?php include 'inc/header.php'; ?>

        <!-- Content -->
        <div class="content  mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

                            <!-- Crad Header -->
                            <div class="card-header text-center">
                                <?= $header?> User
                            </div>

                            <!-- Card Body -->
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <div class="col-sm-2 text-center">
                                            <label for="" class="form-label">Nama: *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input required name="name" type="text" class="form-control border border-secondary-subtle" placeholder="Insert Your Name" 
                                            value="<?= isset($rowEdit['name'])? $rowEdit['name'] : '' ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-2 text-center">
                                            <label for="" class="form-label">Email: *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input required name="email" type="email" class="form-control border border-secondary-subtle" placeholder="example@gmail.com" value="<?= isset($rowEdit['email'])? $rowEdit['email'] : '' ?>"> 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-2 text-center">
                                            <label for="" class="form-label">Password *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input required name="password" type="password" class="form-control border border-secondary-subtle" placeholder="Password" >
                                        </div>
                                    </div>

                                    <div class="row mb-3 text-center">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary" name="<?= isset($_GET['edit'])? 'edit': 'simpan'; ?>">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>