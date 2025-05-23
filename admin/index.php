<?php 
    session_start();
    include'config/koneksi.php';

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        // select * FROM "user" dimana email di ambil dari orang
        // input di inputan email
        $query = mysqli_query($config, "SELECT * FROM users WHERE email='$email' && password = '$password'");
        // apakah betul email yang diinput user sama dengan email yang di table users?
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);



            $_SESSION['NAME'] = $row['name'];
            $_SESSION['ID_USER'] = $row['id'];
            $_SESSION['LEVEL'] = $row['id_level'];
            header("location:dashboard.php?level=" . base64_encode($_SESSION['LEVEL']));
        }else{
            header("location:index.php?error=login");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | Portofolio Erssa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <div class="wrapper">
        <div class="login-form mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header text-center">
                                <h1>Login Form</h1>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email:</label>
                                        <input type="text" name="email" id="email" placeholder="example@gmail.com" class="form-control border border-secondary-subtle">
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Password:</label>
                                        <input type="password" name="password" id="password" placeholder="Password" class="form-control border border-secondary-subtle">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Login</button>
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