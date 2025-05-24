<?php 
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