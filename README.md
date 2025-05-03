# Point of Sale (POS) – Student Day Programming Website

Aplikasi **Point of Sale (POS)** ini merupakan sistem kasir berbasis web yang dikembangkan menggunakan framework Laravel. Project ini dibuat sebagai bagian dari kegiatan Student Day Programming Website, bertujuan untuk memahami pengelolaan transaksi penjualan dan inventaris pada usaha retail atau bisnis kecil-menengah.

---

## Isi Halaman Kategori

Halaman kategori pada aplikasi POS ini digunakan untuk menampilkan daftar kategori produk yang tersedia. Pengguna dapat melihat nama setiap kategori, jumlah produk dalam kategori tersebut, serta melakukan aksi seperti menambah, mengedit, dan menghapus kategori. Biasanya juga terdapat fitur pencarian atau filter untuk memudahkan pengelolaan kategori. Pengambilan dan pengelolaan data kategori diatur oleh controller bernama `CategoryController`, yang mengambil data dari database dan mengirimkannya ke tampilan (view).

**Fitur utama halaman kategori:**
- Menampilkan daftar kategori produk
- Menambah kategori baru
- Mengedit kategori yang sudah ada
- Menghapus kategori
- Fitur pencarian atau filter kategori (opsional) <br>

**Waktu terakhir update:** 05 Maret 2025


---

## Isi Halaman Produk

Halaman produk berfungsi untuk menampilkan daftar seluruh produk yang tersedia dalam sistem POS. Pada halaman ini, pengguna dapat melihat detail produk seperti nama, harga, stok, kategori produk, dan deskripsi singkat. Pengguna juga dapat menambah produk baru, mengedit produk yang sudah ada, menghapus produk, serta melihat detail produk secara lebih lengkap. Biasanya tersedia fitur pencarian atau filter produk berdasarkan kategori atau nama. Seluruh logika pengelolaan produk diatur oleh `ProductController` yang mengambil data produk dari database dan mengirimkannya ke tampilan (view).

**Fitur utama halaman produk:**
- Menampilkan daftar produk
- Foto detail produk `(Not available right now)`
- Menambah produk baru
- Mengedit produk yang sudah ada `(Not available right now)`
- Menghapus produk
- Menampilkan detail produk 
- Fitur pencarian atau filter produk berdasarkan kategori atau nama (opsional) <br>

**Waktu terakhir update:** 05 Maret 2025

---

## Cara Instalasi Singkat

1. **Clone repository:**
    ```
    git clone https://github.com/novanzulhilmi/pos.git
    cd pos
    ```

2. **Install dependencies:**
    ```
    composer install
    ```

3. **Copy dan edit file environment:**
    ```
    cp .env.example .env
    ```
    Sesuaikan konfigurasi database pada file `.env`.

4. **Migrasi database:**
    ```
    php artisan migrate --seed
    ```

5. **Jalankan aplikasi:**
    ```
    php artisan serve
    ```
