<?php 
    // MATERI IF: Percabangan dan logika untuk menjalankan kode berdasarkan kondisi yang diinginkan

    // Operator 
    // = -> Asingn value, 
    // == -> membandingkan, 
    // === -> membandingkan tipe data, 
    // ! -> negasi
    // empty -> kosong
    //isset -> tidak kosong
    $nama ="Bambang";
    if($nama != "Bambang"){
        echo "Iya";
    }elseif ($nama == "Putri"){
        echo "Tidak, Namanya Putri";
    }else{
        echo ("Bukan keduanya");
    }

    echo "<br>";
    echo "<br>";
    if (empty($nama)){
        echo "Tidak kosong";
    }else{
        echo "Kosong";
    }

    // operator pembanding
    // > lebih besar
    // <lebih kecil
    // >= lebih besar sama dengan
    // <= lebih kecil sama dengan
    // == sama dengan
    echo "<br>";
    echo "<br>";
    $suhu = 25;
    if ($suhu > 37) {
        echo "Demam";
    }elseif ($suhu >= 35){
        echo "Suhu badan anda normal";
    }else{
        echo "Suhu badan anda dibawah normal";
    }

    echo "<br>";echo "<br>";
    // Operator logika
    // && -> AND (dua-duanya harus true)
    // || -> OR (salah satunya harus benar)
    // ! -> NOT (bukan keduanya)

    $username = "admin";
    $passsword = "admin";

    if ($username == "admin" && $passsword=="admin"){
        echo "berhasil login";
    }else{
        echo "login gagal";
    }
?>