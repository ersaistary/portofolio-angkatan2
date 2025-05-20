<?php
// output yang diharapkan: 
    // Nama peserta: Ersa Istary Yusuf
    // Nilai: 85
    //Grade : B
    // Status: LULUS

    //Soal: peserta dinyatakan lulus jika nilainya lebih dari 70 dan tidak lulus jika nilai kurang dari sama dengan 70, nilai dikategorikan ke dalam grade dengan huruf
    // A = 90 - 100 B= 80-89 C= 70-79 D=60-69 E<60 
    $nama = "Erssa Istary Yusuf";
    $nilai = 70;

    echo "Nama : ";
    echo $nama; echo "<br>";
    echo "Nilai : ";
    echo $nilai; echo "<br>";
    if($nilai >=90 && $nilai<= 100){
        echo "Grade = A"; 
        echo "<br>";
    }elseif ($nilai >=80 && $nilai< 89){
        echo "Grade = B";
        echo "<br>";
    }elseif ($nilai >=70 && $nilai< 79){
        echo "Grade = C";
        echo "<br>";
    }elseif ($nilai >=60 && $nilai< 69){
        echo "Grade = D";
        echo "<br>";
    }else{
        echo "Grade = E";
        echo "<br>";
    }

    if($nilai > 70){
        echo "Status: LULUS";
    }else{
        echo "Status: TIDAK LULUS";
    }
?>