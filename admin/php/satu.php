<?php 
    //pengertian variabel 
    echo "tes"; //echo mencetak string
    print_r ("aaaa"); // mencetak type data array
    print "bbb"; //string
    echo "<br>";
    var_dump("ccc"); //mencetak string dan memunculkan tipe datanya

    //variabel umum ditandai dengan adanya dollar
    $nama ="ECAAAA";
    $_nama = "";
    $umur = 30;
    $tinggi_badan= 158.6;
    
    define("phi", 3.14); //variabel konstan (nilainya tetap)
    const telp= "0895331020847"; //cetak gaperlu dollar


    echo "<br>";
    echo $nama;
    echo "<br>";
    echo $umur;
    echo "<br>";
    echo $tinggi_badan;
    echo " cm";
    echo "<br>";
    echo telp;
    echo "<br>";
    echo phi;
?>