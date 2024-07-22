# Sistem Manajemen Inventaris

![image](https://github.com/user-attachments/assets/1ff6494f-8831-476e-b3d3-7d96d2576333)

## Deskripsi
Proyek ini adalah Sistem Manajemen Inventaris yang dibangun dengan Laravel. Sistem ini dirancang untuk mengelola produk, pemasok, pelanggan, dan penjualan. Sistem ini mencakup fitur untuk mengekspor data ke format PDF dan Excel, sehingga cocok untuk bisnis kecil hingga menengah.

## Fitur
- Mengelola Produk
- Mengelola Pemasok
- Mengelola Pelanggan
- Mengelola Penjualan
- Ekspor data ke PDF
- Ekspor data ke Excel

## Persyaratan
- PHP ^8.1
- Composer
- Node.js dan npm
- MySQL

## Instalasi
1. Clone repositori:
```
git clone https://github.com/joenior/inventory-laravel11.git
cd inventory-laravel11
```

2. Instal dependensi:
```
composer install
npm install
```
3. Ubah data environtment seperti MySQL pada file .env
4. Generate kunci aplikasi lalu migrasi dan seed database:
```
php artisan key:generate
php artisan migrate --seed
```

6. Bangun aset front-end:
```
npm run dev
```

## Penggunaan
1. Mulai server pengembangan lokal:
```
php artisan serve
```
2. Buka browser dan pergi ke `http://localhost:8000`.


## Berkontribusi
1. Fork repositori.
2. Buat branch baru (`git checkout -b feature-branch`).
3. Lakukan perubahan Anda.
4. Commit perubahan Anda (`git commit -am 'Tambahkan fitur baru'`).
5. Push ke branch (`git push origin feature-branch`).
6. Buat Pull Request baru.

## Credits
- [Laravel](https://laravel.com/)
- [Maatwebsite Excel](https://github.com/Maatwebsite/Laravel-Excel)
- [Barryvdh DomPDF](https://github.com/barryvdh/laravel-dompdf)
- [SweetAlert](https://github.com/realrashid/sweet-alert)
- [Yajra DataTables](https://github.com/yajra/laravel-datatables)
