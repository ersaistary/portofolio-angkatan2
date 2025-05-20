<!-- 
    Variabel sistem: Var yang dibuat oleh php 
    $_POST
    $_GET
    $_SESSION
    $_FILES
    $_REQUEST
 -->
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variabel Sistem | Superglobal var</title>
    </head>
    <body>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Masukkan nama anda">
            </div>
            <br>
            <div class="form-group">
                <label for="nilai">Nilai</label>
                <input type="number" name="nilai" placeholder="Masukkan nilai anda">
            </div>
            <br>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>

        <?php 
            if(isset($_POST['nama'])){
                $nama =$_POST['nama'];
                $nilai =$_POST['nilai'];
                $grade = '';
                $status = '';

                if($nilai >=90 && $nilai<= 100){
                    $grade = "A";
                    echo "<br>";
                }elseif ($nilai >=80 && $nilai< 89){
                    $grade = "B";
                    echo "<br>";
                }elseif ($nilai >=70 && $nilai< 79){
                    $grade = "C";
                    echo "<br>";
                }elseif ($nilai >=60 && $nilai< 69){
                    $grade = "D";
                    echo "<br>";
                }elseif ($nilai <60 && $nilai > 0){
                    $grade = "E";
                    echo "<br>";
                }else{
                    $grade = "Nilai melebihi 100 atau kurang dari 0";
                }

                if($nilai > 70 && $nilai <= 100){
                    $status = "Lulus";
                }elseif ($nilai <= 69 && $nilai >= 0){
                    $status = "Tidak Lulus";
                }else{
                    $status = "Undefine";
                }
            }
            echo "Nama : " . $nama . "<br>" . "Nilai : " . $nilai . "<br>" . "Grade : " . $grade . "<br>" . "Status : " . $status;

            
            // shorthand atau ternery
            // $nama = isset($_POST['nama'] ? $_POST['nama'] : '');
            // echo "HALO " . $nama;
        ?>
    </body>
 </html>