<?php 
    //ARRAYYYYY = tipe data yang menyimpan banyak nilai

    // array index
    $nama = array ('aaaa', 'bbbb', 'cccc', 'dddd');
    //               0        1      2        3

    echo $nama[0];
    echo $nama[1];
    echo $nama[2];
    echo $nama[3];


    $namas = ['eeee', 'ffff', 'gggg'];
    echo $namas[0];
    echo $namas[1];
    echo $namas[2];
    echo "<br>";
    
    print_r ($namas); //cetak semua elemen dalam array
    echo "<br>";
    foreach($nama as $x){
        echo "nama-nama : " . $x . "<br>";
        // echo "<br>";
    }


    //array asosiatif (key berdasarkan string)
    $kelas_web = [
        "nama" => "budi",
        "umur" => 25,
        "jurusan" => "Web programming"
    ];

    echo "Nama siswa: " . $kelas_web["nama"] . "<br>" . "Umur: " . $kelas_web["umur"] . "<br>" . "Jurusan: " . $kelas_web["jurusan"];

    echo "<br>";
    echo "<br>";


    // array multidimension
    $siswa = [
        [
            "nama" => "budi",
            "umur" => 25,
            "jurusan" => "Web programming"
        ],
        [
            "nama" => "reja",
            "umur" => 25,
            "jurusan" => "Web programming"
        ],
    ];

    print_r ($siswa);
    echo $siswa[0]['nama'];
    echo "<br>";

    foreach ($siswa as $key => $x){
        echo "Key: " . $key . "<br><br>";
        echo "nama: " . $x["nama"] . "<br>";
        echo "umur: " . $x["umur"] . "<br>";
        echo "jurusan: " . $x["jurusan"] . "<br>";
    }
?>