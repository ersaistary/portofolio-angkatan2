<?php 
session_start();
    $_name = isset($_SESSION['NAME'])? $_SESSION['NAME']: '';
    if(!$_name){
        header ("location:index.php?access=failed");
    }
include 'config/koneksi.php';
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
        <div class="content mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <?php 
                                    echo (isset($_GET ['page']))? str_replace("-", " ", ucfirst($_GET['page'])) : 'Home';
                                ?>
                                
                            </div>

                            <!-- Body -->
                            <div class="card-body">
                                <?php 
                                    if(isset($_GET['page'])){
                                        if(file_exists("content/" . $_GET['page'] . ".php")){
                                            include "content/" . $_GET['page']. ".php";
                                        }else{
                                            include 'content/notfound.php';
                                        }
                                    }else{
                                        include 'content/home.php'; 
                                    }
                                ?>    
                            
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