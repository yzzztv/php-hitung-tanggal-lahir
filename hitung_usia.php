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
