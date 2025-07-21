<!--
Copyright © 2025 heyalk.dev
-->

# 🚀 SIMDA (Sistem Informasi Manajemen Data) Kabupaten Purworejo

> 🎯 **Sistem Informasi Manajemen Data (SIMDA)** adalah aplikasi dashboard modern untuk pengelolaan aset dan pengajuan barang di lingkungan Kabupaten Purworejo. SIMDA membantu admin dan user dalam memonitor aset, proses pengajuan, serta pelaporan secara efisien dan terintegrasi.

## 📸 Screenshots

✨ **Dashboard Utama**

![Dashboard Utama](screenshots/dashboard-utama.png)

📦 **Tabel Data Master**

![Tabel Data Master ](screenshots/tabel-data-master.png)

🔐 **Form Login**

![Form Login](screenshots/form-login.png)


## 1. Pembuatan dan Setup Database

### a. Buat Database
Pastikan nama database sesuai konfigurasi aplikasi, misal:
```sql
CREATE DATABASE sim-aset-rev2;
```

### b. Import Struktur dan Data Awal
- Import file SQL yang disediakan (`sim-aset-rev2.sql` atau backup Anda) ke database yang baru dibuat.
- Pastikan seluruh tabel utama (`barang`, `asset`, `kategori`, `monitoring`, `pengajuan`, dll) sudah terbuat.

### c. Setting Koneksi Database di CodeIgniter
Edit file:
```
/application/config/database.php
```
Pastikan:
```php
'database' => 'sim-aset-rev2',
'username' => 'root', // atau user MySQL Anda
'password' => '',     // isi jika ada password
```

## 2. Relasi Data Agar Nama Barang Pengajuan Tampil

Untuk menampilkan nama barang pada tabel status pengajuan di dashboard, pastikan relasi antar tabel sudah benar:

- `pengajuan.id_monitoring` mengarah ke `monitoring.id_monitoring`
- `monitoring.id_asset` mengarah ke `asset.id_asset`
- `asset.id_barang` mengarah ke `barang.id_barang`
- `barang.id_barang` ada di tabel barang

### Contoh Update Relasi Data
```sql
-- Tambah data barang jika perlu
INSERT INTO barang (id_barang, nama_barang) VALUES (1, 'Laptop');
INSERT INTO barang (id_barang, nama_barang) VALUES (2, 'Printer');
INSERT INTO barang (id_barang, nama_barang) VALUES (3, 'Proyektor');

-- Update asset agar id_barang valid
UPDATE asset SET id_barang = 1 WHERE id_asset = 1;
UPDATE asset SET id_barang = 2 WHERE id_asset = 2;
UPDATE asset SET id_barang = 3 WHERE id_asset = 3;

-- Update monitoring agar id_asset valid
UPDATE monitoring SET id_asset = 1 WHERE id_monitoring = 1;
UPDATE monitoring SET id_asset = 2 WHERE id_monitoring = 2;
UPDATE monitoring SET id_asset = 3 WHERE id_monitoring = 3;

-- Update pengajuan agar id_monitoring valid
UPDATE pengajuan SET id_monitoring = 1 WHERE id_pengajuan = 1;
UPDATE pengajuan SET id_monitoring = 2 WHERE id_pengajuan = 2;
UPDATE pengajuan SET id_monitoring = 3 WHERE id_pengajuan = 3;
```

## 3. Solusi Jika Nama Barang Pengajuan Tidak Tampil

- **Cek relasi antar tabel** sesuai langkah di atas.
- Jalankan query berikut untuk memastikan data sudah terhubung:
```sql
SELECT pengajuan.id_pengajuan, pengajuan.tgl_pengajuan, monitoring.id_asset, asset.id_barang, barang.nama_barang
FROM pengajuan
LEFT JOIN monitoring ON pengajuan.id_monitoring = monitoring.id_monitoring
LEFT JOIN asset ON asset.id_asset = monitoring.id_asset
LEFT JOIN barang ON barang.id_barang = asset.id_barang;
```
- Jika kolom `nama_barang` masih kosong/NULL, cek dan update data relasi.

## 4. Solusi Jika Status Pengajuan Selalu "Ditolak!"

- Kolom `status_pengajuan` di tabel `pengajuan` **harus berupa angka** (bukan string seperti 'diterima').
- Mapping status di aplikasi biasanya:
  - `0` = Menunggu Konfirmasi
  - `1` = Asset Keputusan
  - `2` = Selesai/Diterima
  - Selain itu = Ditolak

### Cara Update Status Pengajuan
```sql
-- Jadikan status pengajuan diterima/selesai
UPDATE pengajuan SET status_pengajuan = 2 WHERE id_pengajuan = 1;
```
- Jika kolom masih teks, ubah tipe kolom ke INT:
```sql
ALTER TABLE pengajuan MODIFY status_pengajuan INT;
```

## 5. Troubleshooting Lainnya
- Jika data tidak muncul, pastikan sudah clear cache browser (Ctrl+F5) dan sudah login ulang.
- Jika masih error relasi (foreign key), pastikan semua id yang diinput memang ada di tabel referensi.
- Jika ingin menambah data dummy, tambahkan pada tabel terkait sesuai relasi di atas.

## 6. Kontak Bantuan
Jika ada kendala lebih lanjut, hubungi admin/developer SIMDA. ig:@_hey.alk_

---

**Catatan:**
- Selalu backup database sebelum melakukan perubahan data!
- Semua nama tabel, field, dan query sesuaikan dengan struktur database Anda jika berbeda.

---

© 2025 heyalk.dev
