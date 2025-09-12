# Laporan Modul 1: Perkenalan Laravel
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Izzati Nurvira  
**NIM:** 2024573010005
**Kelas:** TI 2C  

---

## Abstrak 
Laporan ini berisi pengenalan tentang framework Laravel yang digunakan dalam pengembangan aplikas web berbasis PHP. Tujuan dari laporan ini adalah untuk memberikan pemahaman awal mengenai struktur proyek Laravel, komponen utama, arsitektur MVC, serta kelebihan dan tantangan dalam penggunaannya. Laporan ini dibuat untuk dapat menjadi landasan awal dalam membangun aplikasi menggunakan Laravel.

## 1. Pendahuluan
 Laravel adalah framework web PHP yang populer, bersifat open-source, dan dirancang untuk  membangunaplikasi web modern yang skalabel dan aman. Laravel mengikuti arsitektur MVC (Model-View-Controller) yang memisahkan logika aplikasi, tampilan, dan alur kontrol, sehingga memudahkan pengembangan dan pemeliharaan aplikasi.
 
 Karakteristik Utama Laravel:

    - MVC (Model-View-Controller): Memisahkan struktur aplikasi agar lebih terorganisir.
    - Opinionated Framework: Laravel memiliki pendekatan atau “opini” tentang bagaimana hal-hal sebaiknya dilakukan, sehingga mempermudah developer dalam membuat keputusan.
    - Routing yang powerful: Mendukung routing yang mudah dibaca dan fleksibel.
    - ORM (Eloquent): Memudahkan interaksi dengan database.
    - Template Engine (Blade): Mempermudah pembuatan tampilan yang dinamis.
    - Built-in Features: Fitur-fitur seperti otentikasi, validasi, dan queue sudah tersedia langsung.
    - Artisan CLI: Command Line Interface untuk otomatisasi tugas-tugas umum.

Laravel ini sangat cocok digunakan untuk membangun aplikasi web mulai dari skala kecil seperti blog dan sistem informasi, hingga skala besar seperti sistem manajemen, e-commerce, dan RESTful API.

## 2. Komponen Utama Laravel (ringkas)
- Blade (templating) = Blade (templating) ini bertugas untuk menampilkan data keuser dalam bentuk tampilan HTML. Laravel menggunakan engine Blade untuk membuat view yang lebih rapi dan mudah dipelihara. Blade juga mendukung template inheritance agar code ytampilan tidak berulang-ulang.

- Eloquent (ORM) = Adalah representasi dari tabel databse yang berhubungan dengan data. Sistem ORM Laravel untuk berinteraksi dengan database menggunakan model, tanpa harus menulis query SQL secara langsung. Dengan model, developer tidak perlu menulis query SQL pnajng,cukup gunakan method Elequent yang lebih singkat.

- Routing = Adalah Mengatur arah request URL ke fungsi atau controller yang sesuai. Semua definisi route biasany ada di folder routes/ seperti web.php untuk web dan api.php untuk API. Dengan routing, kita bisa mengelola URL dengan lebih mudah,konsisten, dan fleksibel.

- Controllers = Controller menjadi penghubung antara model dan view. Controller juga kelas yang menangani logika aplikasi. Controller menerima inpuut dari rouote, memanggil model jika perlu,lalu mengirim data ke view.

- Migrations & Seeders = Migrations digunakan untuk membuat dan mengelola skema database. sedangkan Seeders digunakan untuk mengisi data awal ke dalam database. Dengan kombinasi migration dan seeder, kita bisa mengelola database dengan konsisten tanpa harus manual lewat phpMyAdmin.

- Artisan CLI = Adalah command-line interface bawaan Laravel yang sangat membantu kita. Dengan Artisan kita bisa membuat controller, model, dan database migration hingga menjalankan serve lokal dengan cepat. Artisan ini mempercepat proses pengembangan dan menjaga konsisten struktur kode.

- Testing (PHPUnit) = Fitur built-in untuk melakukan pengujian otomatis terhadap aplikasi Laravel. Kita bisa menulia Unit Test untuk menguji fungsi kecil atau Feature Test untuk menguji keseluruhan alur aplikasi. Dengan testing, bug bisa ditemukan lebih awal dan aplikasi menjadi lebih stabil serta mudah dipelihara.

---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.

- app/
    
    Berisi logika utama aplikasi seperti:

        - Console/: console ini unutk perintah kustom
        - Exceptions/: penanganan erroe dan exception.
        - Http/: Tempat Controller, request, Middlewere.
        - Models/: Tempat menyimpan model Wloquent.
        - Providerrs/: untuk mengboot fitur aplikasi.

- bootstrap/
    
    Berisi file untuk bootstrap dan Aplikasi laravel, seperti:

        - app.php: app.php ini adalah file yg utama untuk menginisialisasi framework.
        - cache/: untuk menyimpan cache konfigurasi,services, dan routes.

- config/

    Berisi file konfigurasi untuk aplikasi, seperti:

        - app.php: ini konfigurasi utama laravel.
        - database.php: untuk setting database seperti MySQL,SQLite,dll.
        - queue.php,mail.php,session.php: konfigurasi konponen masing".

- database/

    Didalam folder database menyimpan file berikut:

        - migrations/: file migration ini untuk struktur tabel databse.
        - factories/: untuk generate data dummy (seeding).
        - seeders/: untuk mengisi tabel dengan data awal.
        - DatabaseSeeder.php: seeder utama yang memanggil seeder lain.

- lang/

    Didalam folder lang ini berisi file lokalisasi atau terjemahan bahasa, seperti:

        - en/validation.php: pesan eror validasi bahasa inggris.
        - Bisa ditambahkan id/validation.php unutk bahasa indonesia.

- public/

    Folder web root (akses langsung oleh browser), seperti:  

        - index.php: ini Entry point utama laravel.
        - css/,js/,images/: Asset publik.

- resources/

    Didalam folder ini berisi file, seprti:

        - views/: blade templats atau (.blade.php) untuk tampilan.
        - css/,js/: sumber file frontend (diolah dengan vite).
        - lang/: Alternatif lokasi file terjemahan.
        - views/components/ : blade componen.

- routes/

    Didalam folder ini berisi file routing aplikasi seperti:

        - web.php: Routing web pakai session.
        - api.php: Routing API (stateless).
        - console.php: Command Artisan berbasis closure.
        - channels.php: Channel untuk broadcasting event.

- storage/

    Didalam folder ini berisi file ,seperti:

        - app/: file aplikasi yang disimpan misalnya uplpoad.
        - framework: Cache framework,session,view compile
        - logs: log eror(laravel.log)

- tests/

    Berisi unit test dan fitur test menggunakan PHPUnit.ada bbrp file dlm folder ini seperti:
        
        - feature/: Test untuk fitur aplikasi.
        - Unit/: Unit test untuk fungsi/logic kecil.
        - TestCase.php: Base class untuk testing.

- vendor/

    Berisi dependensi pihak ketiga (hasil dari composer install).

    Ada beberapa file penting di root, diantaranya adalah:
    
        - artisan → Command-line tool Laravel.
        - composer.json → File dependensi PHP (composer).
        - package.json → Dependensi frontend (npm/yarn, misalnya Vite, Tailwind).
        - phpunit.xml → Konfigurasi unit testing.
        - .env → File environment (konfigurasi lokal:DB,mail,Cache,dll).
        - .gitignore → File yang diabaikan Git.

---

## 4. Diagram MVC dan Cara kerjanya

    MVC(Model-View-Controller) adalah pola arsitektur software untuk memisahkan logika bisnis,tampilan, dan alur kontrol. Diagram dan alur kerjanya adalah:
    1. Model (M)
        adalah Representasi data & aturan bisnis. Biasanya Model ini berhubungan dengan database. Contohnya user.php (Model untuk tabel users).
    
    2. Views (V)
        Adalah bagian tampilan/antarmuka yang dilihat user. Biasanya berupa Blade template dilaravel. Contohnya Welcome.blade.php.

    3.Controller(C)
        Adalah penghubung antara Model dan View. Menerima request dari user(via route), memproses data (menggunakan Model),lalu menampilkan hasil (ke view).

    Ringkasnya:
    User -> Route ->Controller -> Model -> Controller -> View -> User

    lihat cara nya disini https://www.ulas.in/komputer/markdown-memasukkan-gambar/

---

## 6. Kelebihan & Kekurangan (refleksi singkat)
    - Kelebihan Laravel menurut saya adalah Laravel ini sangat kuat untuk aplikasi web skala menengah sampai besar karena terstruktur dan juga lengkap,Routing sederhana dan fleksibel,komunitas dan dokumentasi yang luas, dan juga query database lebih mudah dann rapi.
    
    - Hal yang mungkin menjadi tantangan bagi pemula adalah berdasarkan pengalaman saya pertama kali menggunakan Larave adalah banyak folder dan file default sehingga bingung mau mulai dari mana. Harus memahami konsep MVC, kadang membingungkan kenapa harus lewat Controller dulu padahal bisa langsung ke query ke DB. Kalau dibagian Artisan Command, Awalnya sulit diingat semua karena banyak perintah (make:model,make:controller,migrate,dll) .Dan juga menampilkan menampilkan eror yang panjang dan teknis membingungkan.

---

## 7. Referensi
    banyak Referensi yang saya baca diantaranya modul yang di classroom yang bapak cantumkan dan juga ada beberapa lagi,diantaranya:
    - Laravel Documentation = https://laravel.com/docs
    - Laravel: Up & Running" oleh Matt Stauffer = https://course-net.com/blog/buku-dan-ebook-laravel-terbaik/
    - dan juga di sini : https://www.rumahweb.com/journal/belajar-laravel/

---