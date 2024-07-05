
# Kişiler Yönetim Sistemi

Bu proje, bir MySQL veritabanına bağlanarak "kisiler" tablosundaki kayıtları listeleyen ve kullanıcıların bu kayıtları seçerek silmelerine olanak tanıyan bir web uygulamasıdır.

## Gereksinimler

- PHP 7.0 veya üzeri
- MySQL veritabanı
- Web sunucusu (Apache, Nginx, vb.)

## Kurulum

1. **Veritabanı Bağlantısı:**

   - `egitim` adında bir MySQL veritabanı oluşturun.
   - Aşağıdaki yapıda bir `kisiler` tablosu oluşturun:
     ```sql
     CREATE TABLE kisiler (
         id INT AUTO_INCREMENT PRIMARY KEY,
         adi VARCHAR(255) NOT NULL,
         soyadi VARCHAR(255) NOT NULL
     );
     ```
   - `kisiler` tablosuna örnek veriler ekleyin:
     ```sql
     INSERT INTO kisiler (adi, soyadi) VALUES ('Ali', 'Veli'), ('Ayşe', 'Fatma'), ('John', 'Doe');
     ```

2. **Proje Dosyalarını İndirin:**

   - Bu proje dosyalarını web sunucunuzun kök dizinine veya uygun bir alt dizine yerleştirin.

3. **Veritabanı Bağlantı Ayarları:**

   - `index.php` dosyasında, veritabanı bağlantı bilgilerinizi güncelleyin:
     ```php
     $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=egitim;charset=UTF-8", "root", "");
     ```

## Kullanım

1. **Kayıtları Listeleme ve Silme:**

   - `index.php` dosyasını tarayıcınızda açın. Bu sayfa, `kisiler` tablosundaki tüm kayıtları listeleyecek ve her kaydın yanında bir onay kutusu gösterecektir.
   - Silmek istediğiniz kayıtları seçin ve "Seçili olanları sil" butonuna tıklayın. Seçili kayıtlar `sonuc.php` dosyası üzerinden işlenecek ve veritabanından silinecektir.

## Dosya Açıklamaları

- `index.php`: Veritabanına bağlanarak kayıtları listeleyen ve silme formunu içeren ana dosya.
- `sonuc.php`: Seçili kayıtları veritabanından silmek için kullanılan dosya.

