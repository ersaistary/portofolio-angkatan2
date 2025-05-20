<!-- function
 1. function yang kita buat
 2. function bawaan strlen(), inarray() 
 -->

 <?php 
    function callName(){
        echo "Nama saya Erssa";
    }
    callName(); //if the function using "echo" we dont need echo while calling the function
    echo "<br>";

    function callNameLagi(){
        return "Nama saya Eca";
    }
    echo callNameLagi(); //if the function using "return" we need echo while calling the function
    echo "<br>";

    function perkalian($angka1, $angka2){
        // $angka1 = 1;
        // $angka2 = 2;
        $total = $angka1*$angka2;
        echo $total;
    }

    
    perkalian(2, 4);
 ?>