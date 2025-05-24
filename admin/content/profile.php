<?php 
    $query = mysqli_query($config, "SELECT * FROM about ORDER BY id desc");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    // if(isset($_GET['delete'])){
    //     $id = $_GET['delete'];
    //     $queryDelete = mysqli_query($config, "DELETE FROM about WHERE id='$id'");
    //     header("location:?page=profile&hapus=berhasil");
    // }
?>

<div align="right"class="mb-3">
    <a href="?page=tambah-profile" class="btn btn-primary">Tambah</a>
</div>
<div class="table-responsive">
    <table class="table table-hover table-bordered border-secondary-subtle">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($row as $key => $data): ?>
                <tr>
                    <td class="text-center"><?= $key + 1 ?></td>
                    <td><?= $data ['name']?></td>
                    <td><?= $data ['description']?></td>
                    <td><?= $data ['status']?></td>
                    <td class="text-center">
                        <a href="?page=detail-profile" class="btn btn-warning btn-sm">Detail</a>
                        <a href="?page=tambah-profile&edit=<?php echo $data['id']?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="?delete=<?php echo $data['id']?>" onclick="return confirm('Are you sure?')"  class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>