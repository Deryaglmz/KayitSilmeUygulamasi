<?php

try {
    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=egitim;charset=UTF-8", "root", "");
} catch (PDOException $Hata) {
    echo "Bağlantı Hatası<br>" . $Hata->getMessage();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sonuc.php" method="post">
        <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
        <?php
        $Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM kisiler");
        $Sorgu->execute();

        $KayitSayisi = $Sorgu->rowCount();
        $Kayitlar = $Sorgu->fetchAll(PDO::FETCH_ASSOC);

        foreach ($Kayitlar as $KayitSatirlari) {
        ?>    
            <tr>
                <td width="25" height="30" align="left"><input type="checkbox" name="secim[]" value="<?php echo $KayitSatirlari["id"]; ?>"></td>
                <td height="30" align="left"><?php echo $KayitSatirlari["adi"] . " " . $KayitSatirlari["soyadi"]; ?></td>
            </tr>
        <?php    
        }
        ?>
            <tr>
                <td height="30" colspan="2" align="left"><input type="submit" value="Seçili olanları sil"></td>
            </tr>
        </table>
    </form>
</body>
</html>
