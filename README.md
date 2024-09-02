# php-hitung-tanggal-lahir
Script ini digunakan untuk menghitung tanggal lahir
Cara Menjalankan Kode di Termux:
Instal PHP di Termux: Jika Anda belum menginstal PHP di Termux, gunakan perintah berikut:

Install PHP : 
```
pkg install php
```

Simpan Kode di File: Buat file PHP baru di Termux, misalnya hitung_usia.php, menggunakan perintah nano atau editor teks lainnya:

Copy code:
```
<?php

// Ambil tanggal lahir dari input pengguna
echo "Masukkan tanggal lahir kamu (format: YYYY-MM-DD): ";
$tanggal_lahir = trim(fgets(STDIN));

// Hitung usia berdasarkan tanggal lahir
$tanggal_lahir_datetime = new DateTime($tanggal_lahir);
$tanggal_sekarang = new DateTime();
$usia = $tanggal_sekarang->diff($tanggal_lahir_datetime);

// Tampilkan usia dalam format yang lucu
echo "\nWaw, kamu sudah berumur " . $usia->y . " tahun, " . $usia->m . " bulan, dan " . $usia->d . " hari!\n";

if ($usia->y < 10) {
    echo "Masih muda banget nih, kayak permen karet yang baru dibuka!\n";
} elseif ($usia->y < 20) {
    echo "Remaja gaul nih, siap-siap masuk ke fase dewasa!\n";
} elseif ($usia->y < 30) {
    echo "Wih, masih banyak waktu untuk bersenang-senang dan belajar hal baru!\n";
} else {
    echo "Pengalaman hidup kamu udah banyak nih, semoga makin bijak dan bahagia ya!\n";
}

?>
```

Buat file baru:
```
nano hitung_usia.php
```

Lalu, tempelkan kode PHP di atas dan simpan file tersebut.

Jalankan Skrip PHP: Setelah menyimpan file, jalankan skrip PHP dengan perintah berikut:

Jalankan script:

```
php hitung_usia.php
```

Masukkan Tanggal Lahir: Saat diminta, masukkan tanggal lahir Anda dalam format YYYY-MM-DD (misalnya, 1990-05-15).

File yang telah siap dicoba bisa langsung di unduh dengan perintah:
```
pkg install git
```
kemudian
```
git clone https://github.com/yzzztv/php-hitung-tanggal-lahir.git
```


Skrip ini akan menghitung usia Anda dan menampilkan pesan yang lucu sesuai dengan usia yang telah dihitung.
Anda bebas mengubah atau memodifikasi script karena script ini 100% opensource
