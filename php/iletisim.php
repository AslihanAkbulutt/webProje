<?php

error_reporting(0);

if(isset($_POST['gonder'])){
    
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $email=$_POST["email"];
    $cinsiyet=$_POST["cinsiyet"];
    $konu=$_POST["konu"];
    $dil=$_POST["dil"];
    $mesaj=$_POST["mesaj"];
    if($ad!="" && $soyad!="" && $email!="" && $cinsiyet!="" && $konu!="" && $dil!="" && $mesaj!=""){
        echo "Ad Soyad : $ad $soyad <br>";
        echo "E-Mail : $email <br>";
        echo "Cinsiyet : $cinsiyet <br>";
        echo "Konu : $konu <br>";
        echo "Diller : ";
        foreach ($dil as $key => $value) {
            echo "$value / ";
        }
        echo "<br>Mesaj : $mesaj";
    }
    else{
        header("Location:../iletisim.html");
    }
}
else {
    header("Location:../iletisim.html");
}
?>
