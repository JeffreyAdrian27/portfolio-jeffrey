# Ringkasan Lengkap Proyek: Portofolio Jeffrey Adrian (S.Kom)

> **Catatan untuk AI / Pengembang di Sesi Baru:**  
> Dokumen ini memuat seluruh riwayat percakapan, perubahan kode, keputusan desain, arsitektur teknis, dan catatan penting (*gotchas*) dari awal proyek hingga kondisi terkini. Gunakan dokumen ini sebagai acuan utama agar konteks tidak hilang.

---

## 1. Ikhtisar & Arsitektur Proyek
- **Pemilik Portofolio:** Jeffrey Adrian, S.Kom (Software Developer / Full-Stack Engineer)
- **Teknologi Utama:**
  - **Backend:** Laravel 11 (PHP 8.3+)
  - **Frontend:** Laravel Blade, Tailwind CSS v4, Vanilla JavaScript, Vite
  - **Web Server:** Nginx / Apache (.htaccess dikonfigurasi)
  - **Hosting Target:** Render / VPS
- **File Utama:**
  - `resources/views/portofolio.blade.php`: Halaman tunggal (*Single Page Application style*) berisi semua section, modal, script, dan styling kustom.
  - `resources/css/app.css`: Konfigurasi Tailwind v4 (@theme font-sans, animasi tema).
  - `app/Http/Controllers/PortfolioController.php`: Controller penyedia data `$profileData` (profil, sertifikat, proyek, skill, pengalaman, kontak).
  - `public/robots.txt` & `public/robot.txt`: Direktif SEO & Anti-Dorking.
  - `public/.htaccess`: Header keamanan, Anti-Dorking, dan blokir pengunduhan bot gambar.

---

## 2. Riwayat Kronologis Permintaan Pengguna & Implementasi

### Permintaan 1: Responsivitas Foto Profil & Nama di Beranda
- **Kebutuhan:** Foto profil dan nama "Jeffrey Adrian" di section Home tampak terlalu besar saat layar di bawah 500px (< 500px).
- **Implementasi:**
  - Dibuat class `.home-photo-frame` dengan ukuran responsif (Desktop: 380px, Tablet: 290px, Mobile < 500px: 220px).
  - Penyesuaian class `.home-title-name` untuk breakpoint mobile.

### Permintaan 2 & 4: Tombol Floating "Back to Top"
- **Kebutuhan:** Ditambahkan tombol mengambang di pojok kanan bawah yang muncul otomatis saat pengguna scroll ke bawah (> 250px) dan mengembalikan posisi layar ke paling atas saat diklik.
- **Implementasi:**
  - Elemen `#backToTopBtn` dengan ikon panah ke atas (warna aksen teal, shadow, dan transisi halus).
  - Event listener `scroll` dan fungsi `scrollToTop()`.

### Permintaan 3, 4, & 6: Slider & Carousel Portfolio (Sama Seperti Sertifikat + Autoplay)
- **Kebutuhan:**
  - Bagian Portfolio dibuat memiliki sistem carousel/slider dan modal detail yang seragam dengan bagian Certificates.
  - Portfolio dibuat bergeser otomatis (*autoplay carousel*).
  - Penambahan link GitHub aktif di bagian Contact Me.
- **Implementasi:**
  - Carousel tanpa dependensi eksternal: `#projectTrack`, clone cards untuk looping mulus, tombol prev/next, dot indicators, dan touch/drag swipe.
  - Autoplay slider dengan interval otomatis yang otomatis berhenti saat di-hover atau saat tab browser tidak aktif (`visibilitychange`).
  - Penambahan URL GitHub `https://github.com/JeffreyAdrian27` pada `$profileData['contact']['github_url']`.

### Permintaan 5: Perbaikan Call-to-Action "Ready to Build Impactful Solution"
- **Kebutuhan:** Mengembalikan tombol aksi dan merapikan layout section penutup sebelum footer agar elegan dan proporsional.
- **Implementasi:**
  - Penataan ulang card banner kontak dengan tombol "Get in Touch" dan "Download CV".

### Permintaan 7: Ergonomi Menu Navigasi Mobile ("Contact")
- **Kebutuhan:** Pada layar HP/kecil, tombol menu "Contact" di navigation drawer dibuat lebih besar dan mudah ditekan.
- **Implementasi:**
  - Tombol menu Contact diberi styling khusus (badge nomor `08`, background `bg-teal-500/10`, border teal, padding lebih tebal `py-3.5`).

### Permintaan 8 & 9: Security Anti-Dorking & SEO Friendly
- **Kebutuhan:**
  - Perlindungan terhadap teknik *Google Dorking* dan *reconnaissance scanning*.
  - Pembuatan file `robots.txt` dan `robot.txt`.
  - Optimalisasi SEO untuk kata kunci: *"Jeffrey Adrian"*, *"Portofolio Jeffrey Adrian"*, *"Jeffrey Adrian S.Kom"*, dll.
- **Implementasi:**
  - **`robots.txt` & `robot.txt`:**
    - Memblokir folder sensitif: `/images/`, `/storage/`, `/admin/`, `/wp-admin/`, `/api/`.
    - Memblokir ekstensi berbahaya: `.sql`, `.bak`, `.log`, `.env`, `.ini`, `.cfg`, `.zip`, `.json`.
    - Membatasi bot agresif (Ahrefs, Semrush, MJ12bot, PetalBot).
  - **`public/.htaccess`:**
    - Rewrite rules memblokir dotfiles (`.git`, `.env`), ekstensi backup/dump, dan probe admin (`wp-login`, `phpmyadmin`, `cgi-bin`).
    - Security headers: `X-Content-Type-Options: nosniff`, `X-Frame-Options: SAMEORIGIN`, `X-XSS-Protection`, `Referrer-Policy`, `Permissions-Policy`.
  - **SEO Tags & Schema.org JSON-LD:**
    - Meta tags lengkap (Title, Description, Keywords, Canonical, OpenGraph, Twitter Card).
    - Structured Data Schema.org (`Person` & `WebSite`).
    - **Catatan Penting:** Di Laravel Blade, hindari menulis raw JSON `@context` langsung di HTML karena Blade salah mengompilasinya sebagai directive `@context`. Selalu render melalui `@php $schemaData = [...]; @endphp` dan `{!! json_encode($schemaData, ...) !!}`.

### Permintaan 10: Anti-Save Image (Browser & Google Images)
- **Kebutuhan:** Mencegah gambar di website disimpan via klik kanan di Google Chrome serta mencegah pengindeksan gambar di Google Images.
- **Implementasi:**
  - **Di Google Images:**
    - Meta tag robots diubah dari `max-image-preview:large` menjadi `noimageindex`:
      `<meta name="robots" content="index, follow, max-snippet:-1, noimageindex, max-video-preview:-1">`
      `<meta name="googlebot-image" content="noindex, nofollow, noimageindex">`
    - `robots.txt`: Menambahkan `User-agent: Googlebot-Image` -> `Disallow: /`.
    - `.htaccess`: Menambahkan header `X-Robots-Tag: "noindex, noimageindex, nofollow"` untuk file gambar (`jpg|png|webp|gif|svg|pdf`).
  - **Di Browser (Client-side):**
    - CSS: `-webkit-user-drag: none; user-drag: none; -webkit-touch-callout: none; user-select: none;` (mencegah drag gambar dan menu unduh tahan-lama di layar sentuh).
    - JavaScript: Event listener `contextmenu` dan `dragstart` dengan `preventDefault()` khusus pada tag `IMG`.

### Permintaan 11, 12, 13, 14, 15: Tipografi Nama "JEFFREY ADRIAN"
- **Masalah Awal:** Tampilan font nama berbeda di tiap perangkat karena menggunakan font lokal sistem (`Comic Sans`, `Bradley Hand`, `Apple Chancery`). Di iPhone muncul gaya tulisan tangan, di Android kembali ke font standar sans-serif, di PC muncul font serif.
- **Evolusi Desain:**
  1. *User memilih:* Ingin font yang seragam di semua perangkat menggunakan Web Font.
  2. *User meminta:* Tampilan sesuai gambar referensi:
     - **Font:** All-Caps, geometris melebar (*extended sans-serif*) tebal menggunakan Google Fonts **`Syncopate`** (700 bold) & **`Unbounded`**.
     - **Teks:** `JEFFREY ADRIAN` (uppercase penuh).
     - **Format:** Lurus ke samping (1 baris penuh, tidak boleh turun ke baris baru / `white-space: nowrap;`).
  3. *Penyesuaian Responsif:*
     - **Desktop:** `36px` (agar pas dalam kolom grid dan tidak wrap).
     - **Tablet:** `28px`.
     - **Mobile (< 500px):** Diperbesar proporsional dari 19px menjadi `clamp(21px, 5.8vw, 24px)` agar tampak tegas dan gagah tanpa keluar dari layar.

### Permintaan 16: Perbaikan Modal Sertifikat di HP (Teks "Issued" Terpotong)
- **Masalah:** Pada smartphone, saat membuka modal sertifikat, teks tanggal `Issued: 202...` terpotong dan judul sertifikat terhimpit.
- **Penyebab:**
  1. Header modal memiliki 5 tombol kontrol zoom (`+`, `-`, `100%`, `open tab`, `close`) yang menghabiskan >65% lebar layar mobile.
  2. Container judul & tanggal menggunakan wrapper `div class="truncate"` sehingga saat ruang sempit, tanggal ikut terpotong.
- **Solusi yang Diterapkan:**
  1. Elemen `#modalCertDate` diberi class `whitespace-nowrap overflow-visible text-[11px] sm:text-xs text-zinc-500 dark:text-zinc-400` sehingga **dijamin tidak akan pernah terpotong**.
  2. Tombol manual zoom desktop (`+` dan `-`) disembunyikan di layar HP (`hidden md:inline-flex`), membebaskan lebih dari 110px ruang horizontal untuk judul dan tanggal.
  3. Padding header dirampingkan di layar HP (`px-3.5 sm:px-6 py-3 sm:py-4`).
  4. Ditambahkan dukungan gestur sentuh mobile pada viewport sertifikat:
     - **Double-tap:** Langsung zoom in (175%) / reset ke 100%.
     - **Pinch-to-zoom:** Cubit 2 jari untuk zoom dinamis (0.75x s/d 3.5x).
     - **Swipe finger:** Geser 1 jari ke kiri/kanan untuk berpindah halaman pada sertifikat multi-page.

---

## 3. Struktur Konfigurasi CSS & Asset Build
- **Vite:** Asset build menggunakan Vite 7 (`npm run build`).
- **File Output Build:** `public/build/manifest.json`, `public/build/assets/app-*.css`, `public/build/assets/app-*.js`.
- **Setiap kali mengubah file blade/css/js:**
  Selalu jalankan:
  ```bash
  npm run build
  php artisan view:clear
  ```

---

## 4. Panduan untuk Sesi Chat Baru
Jika melanjutkan pengembangan di masa mendatang, perhatikan hal-hal berikut:
1. **Jangan mengubah font `.home-title-name` sembarangan:** Font nama saat ini sengaja dirancang menggunakan `Syncopate` (Google Fonts) dengan `white-space: nowrap;` dan ukuran font terkontrol agar tidak patah ke baris bawah.
2. **Jangan menghapus proteksi anti-save image:** Fitur anti-klik kanan gambar dan tag `noimageindex` adalah permintaan keamanan penting dari user.
3. **Perhatikan Blade `@context`:** Jangan menyisipkan `@context` mentah di dalam file blade karena Blade akan menganggapnya directive. Gunakan variabel PHP lalu `json_encode`.
4. **Header Modal Sertifikat:** Jaga agar kontrol tombol pada modal sertifikat tetap ramah mobile (`whitespace-nowrap` pada tanggal, tombol desktop-only disembunyikan di mobile).
