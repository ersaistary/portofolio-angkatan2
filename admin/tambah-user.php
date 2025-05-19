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
        <header class="shadow">
            <nav class="navbar navbar-expand-lg bg-body-white ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">CMS Erssa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Page
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">About</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="user.php">User</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Content -->
        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

                            <!-- Crad Header -->
                            <div class="card-header text-center">
                                Data User
                            </div>

                            <!-- Card Body -->
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <div class="col-sm-2 text-center">
                                            <label for="" class="form-label">Nama: </label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Insert Your Name">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-2 text-center">
                                            <label for="" class="form-label">Email: </label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-2 text-center">
                                            <label for="" class="form-label">Password </label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">Sign in</button>
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