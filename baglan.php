<?php

try {
    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=makale;charset=utf8", "root", "");
} catch (PDOException $Hata) {
    echo "Bağlantı Hatası<br>" . $Hata->getMessage();
    die();
}
?>
