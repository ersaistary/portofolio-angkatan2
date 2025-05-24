<?php 
    if(isset($_POST['simpan'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $time = $_POST['time'];
        $position = $_POST['position'];
        $position_desc = $_POST['position_desc'];
        $status = $_POST['status'];

        $query = mysqli_query($config, "INSERT INTO `about`(`name`, `description`, `time`, `position`, `position_desc`, `status`) VALUES ('$name','$description','$time','$position','$position_desc','$status')");
        if($query){
            header("location:?page=tambah-profile&tambah=berhasil");
        }

    }
    
    $header= isset($_GET['edit'])? "Edit" : "Tambah";
    $id_user = isset($_GET['edit'])? $_GET['edit'] : '';
    $queryEdit = mysqli_query($config, "SELECT * FROM about WHERE id='$id_user'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);

    if(isset($_POST['edit'])){
        $id_user = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $time = $_POST['time'];
        $position = $_POST['position'];
        $position_desc = $_POST['position_desc'];
        $status = $_POST['status'];

        $queryUpdate = mysqli_query($config, "UPDATE `about` SET `name`='$name',`description`='$description',`time`='$time',`position`='$position',`position_desc`='$position_desc'',`status`='$status' WHERE `id` = '$id_user'");
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
            <input required name="name" type="text" class="form-control border border-secondary-subtle" placeholder="Insert Your Name" value="<?= isset($rowEdit['name'])? $rowEdit['name'] : '' ?>">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2 text-center">
            <label for="" class="form-label">Description: *</label>
        </div>
        <div class="col-sm-10">
            <input required name="description" type="text" class="form-control border border-secondary-subtle" placeholder="Description" value="<?= isset($rowEdit['description'])? $rowEdit['description'] : '' ?>"> 
        </div>
    </div>

   <div class="row mb-3">
        <div class="col-sm-2 text-center">
            <label for="" class="form-label">Time: *</label>
        </div>
        <div class="col-sm-10">
            <input required name="time" type="date" class="form-control border border-secondary-subtle" placeholder="Time" value="<?= isset($rowEdit['time'])? $rowEdit['time'] : '' ?>"> 
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2 text-center">
            <label for="" class="form-label">Position: *</label>
        </div>
        <div class="col-sm-10">
            <input required name="position" type="text" class="form-control border border-secondary-subtle" placeholder="Position" value="<?= isset($rowEdit['position'])? $rowEdit['position'] : '' ?>"> 
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2 text-center">
            <label for="" class="form-label">Position Description: *</label>
        </div>
        <div class="col-sm-10">
            <input required name="position_desc" type="text" class="form-control border border-secondary-subtle" placeholder="Position Description" value="<?= isset($rowEdit['position_desc'])? $rowEdit['position_desc'] : '' ?>"> 
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2 text-center">
            <label for="" class="form-label">Status *</label>
        </div>
        <div class="col-sm-10">
            <input required name="status" type="text" class="form-control border border-secondary-subtle" placeholder="Status" value="<?= isset($rowEdit['status'])? $rowEdit['status'] : '' ?>"> 
        </div>
    </div>

    <div class="row mb-3 text-center">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" name="<?= isset($_GET['edit'])? 'edit': 'simpan'; ?>">Save</button>
        </div>
    </div>

</form>