<?php 
    $query = mysqli_query($config, "SELECT * FROM users ORDER BY id desc");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $queryDelete = mysqli_query($config, "DELETE FROM users WHERE id='$id'");
        header("location:user.php?hapus=berhasil");
    }
?>

<div class="table-responsive">
    <div align="right"class="mb-3">
        <a href="?page=tambah-user" class="btn btn-primary">Tambah</a>
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