# Proyek Akhir Pemrograman Internet #

Halaman ini memuat deskripsi proyek akhir untuk mata kuliah Pemrograman Internet.
Meski demikian, bagi pembaca yang tertarik untuk melakukan proyek tersebut, boleh
juga mencobannya.

Beberapa deskripsi proyek sengaja dibuat tidak terlalu spesifik untuk memberikan
keleluasaan pada mahasiswa untuk lebih berkreasi membuat program. Selain itu, 
spesifikasi yang disebutkan pada list proyek adalah spesifikasi teknis, artinya
spesifikasi desain dan kemudahan program harus sesuai kreatifitas masing-masing
mahasiswa dan masuk pada poin penilaian.

Untuk memudahkan perancangan antarmuka, mahasiswa boleh mendownload dan 
memodifikasi template HTML, CSS, dan Javascript yang ada di Internet dengan 
menyertakan URL asal template didownload pada bagian footer.

Spesifikasi yang tercantum adalah spesifikasi minimal dan mahasiswa harus menambahkan
beberapa fitur pendukung meskipun tidak tercantum pada spesifikasi, sampai pada taraf
kepantasan sebuah aplikasi yang layak publish di Internet.

Setelah jadi, aplikasi diupload pada hosting masing-masing (gratis maupun berbayar)
dan source code-nya diupdate secara teratur pada github.com. Pastikan pada saat 
penilaian, source code dan aplikasi yang diunggah adalah versi final terakhir.

Tugas ini adalah tugas kelompok, tapi penilaiannya adalah mandiri. Artinya, mungkin saja
satu kelompok ada yang mendapat nilai A dan ada yang mendapat nilai C sesuai dengan 
kontribusinya dan kemampuan menjawab pada saat presentasi. Untuk lebih mudahnya
pada README.md halaman masing-masing, sebutkan formasi anggota kelompok dan 
peran masing-masing anggota kelompok.



## Proyek 1 : Legislative Track Record ##

Aplikasi web yang digunakan oleh calon legislatif untuk mempromosikan dirinya
berdasarkan prestasi atau aktifitas yang telah dilakukan, sekaligus memudahkan
calon pemilih untuk mencari calon legislatif yang sesuai dengan visi-misinya.

Agar lebih fair, bukan hanya caleg saja yang dapat memposting aktifitasnya, 
calon pemilih juga dapat memposting berita tentang caleg yang bersangkutan. Namun
untuk menghindarkan kampanye hitam yang berlebihan, hanya link dari website
berita saja yang boleh dipostingkan.

### Deskripsi Pengguna ###

Aplikasi ini memiliki 2 jenis pengguna yaitu:

1. Calon Legislatif (Caleg) : Mendaftarkan diri dan melengkapi biodatanya, termasuk 
	asal partai dan daerah pemilihan (Dapil). Selain biodata, caleg juga dapat
	memposting visi-misi, pemikiran, dan link terkait tentang dirinya.

2. Calon Pemilih (Voter) : Mendaftarkan diri dan memilih tempat domisilinya. Selain
	dapat mencari informasi tentang caleg yang sesuai, jenis pengguna ini juga dapat 
	memposting berita yang berhubungan dengan caleg tersebut.

### Workflow Penggunaan Aplikasi ###

1. Caleg melakukan registrasi dan melengkapi biodata
2. Caleg menuliskan artikel yang sesuai dengan visi misi
3. Caleg memposting url beritan yang berkaitan dengan dirinya
4. Pengguna umum melihat profil caleg per partai dan per dapil
5. Pengguna mencari profil caleg yang sesuai dengan visi misinya
6. Voter melakukan registrasi dan melengkapi biodata
7. Voter mempostingkan berita tentang caleg terkait pada halaman profil caleg tersebut

### Spesifikasi Aplikasi ###

Adapun spesifikasi yang harus ada pada aplikasi yang dibuat adalah sebagai berikut:

- Caleg dan Voter dapat melakukan registrasi
- Caleg dan Voter dapat melakukan login untuk menambahkan profil dan posting
- Login Caleg dan Voter menggunakan email sebagai username-nya dan password
- Pengguna lain dapat mengakses informasi tanpa harus login
- Pengguna dapat mencari daftar caleg sesuai dengan kata kunci yang diberikan.
  Misalkan pengguna mencari "Green House", maka aplikasi akan menampilkan profil
  caleg yang visi misi dan aktifitasnya seputar Green House
- Daftar partai dan daerah pemilihan diinputkan secara manual melalui database, 
  atau bisa diinputkan melalui halaman admin (nilai tambah)
- Biodata caleg yang diinputkan adalah : Nama Lengkap, Tempat Tanggal Lahir, Alamat, 
  Email, Website, Partai, Daerah Pemilihan, dan Visi Misi
- Biodata voter yang diinputkan adalah : Nama Lengkap, Alamat, Email, dan Dapil
- Isian Partai dan Daerah Pemilihan harus berupa pilihan drop down dengan mengambil
  data dari database
- Caleg dapat mempostingkan artikel untuk menyampaikan tambahan pandangan visi-misi
  dan memperkuat pencitraan
- Caleg dapat mempostingkan url berita yang terkait dengan dirinya untuk menambah
  pencitraan juga
- Voter hanya dapat mempostingkan url berita pada halaman profil caleg tertentu untuk
  memberikan pemberitaan yang seimbang untuk caleg tersebut



## Proyek 2 : Bimbingan Skripsi Online ##

Aplikasi berbasis web yang dapat digunakan oleh mahasiswa skripsi dan pembimbingnya
untuk memperlancar komunikasi dan mempermudah dokumentasi dalam pembuatan skripsi.


### Deskripsi Pengguna ###

Aplikasi ini memiliki 2 jenis pengguna yaitu :

1. Pembimbing: dapat mendaftarkan diri dan mengisikan biodata serta keahlian yang dimiliki.
   Setelah mendaftar pembimbing memiliki kode bimbingan yang diberikan kepada mahasiswa yang
   akan dibimbing agar dapat enrol ke pembimbing tersebut.
2. Mahasiswa: mendaftarkan diri dan mengisi biodata serta topik skripsi yang sedang dikerjakan.
   Setelah mendaftar mahasiswa harus enrol ke salah satu pembimbing dengan menggunakan kode
   bimbingan yang diberikan oleh pembimbing. Setelah enrol mahasiswa tersebut baru dapat
   melakukan aktfitas bimbingan.

### Workflow Penggunaan Aplikasi ###

1. Pembimbing melakukan registrasi
2. Pembimbing mendapatkan kode bimbingan
3. Pembimbing memberikan kode bimbingan pada calon mahasiswa bimbingan (offline)
4. Mahasiswa melakukan registrasi
5. Mahasiswa memasukkan Data Skripsi dan kode bimbingan yang telah didapatkan dari dosen
6. Mahasiswa dan Dosen melakukan aktifitas bimbingan
   1. Pembimbing menginputkan instruksi & komentar pada mahasiswa
   2. Mahasiswa menjalankan instruksi yang telah diberikan pembimbing (offline)
   3. Mahasiswa memposting hasil pekerjaan
   4. Pembimbing memvalidasi hasil pekerjaan apakah sudah sesuai atau tidak
   5. Pembimbing memberikan instruksi lanjut pada mahasiswa
   6. kembali ke langkah a hingga skripsi selesai

### Spesifikasi Aplikasi ###

Adapun spesifikasi yang harus ada pada aplikasi bimbingan skripsi online ini adalah:

- Pembimbing dan Mahasiswa dapat melakukan registrasi
- Pembimbing dan Mahasiswa dapat melakukan login dengan menggunakan email dan password
- Setelah melakukan registrasi pembimbing mendapatkan kode bimbingan untuk diberikan
  pada calon mahasiswa bimbingan
- Setelah registrasi mahasiswa harus memasukkan kode bimbingan untuk masuk ke dalam
  kelompok bimbingan dosen yang dimaksud
- Dosen dapat melihat siapa saja mahasiswa yang masuk ke dalam bimbingannya
- Mahasiswa dapat melihat judul skripsi apa saja milik mahasiswa lain yang telah dibimbing
  oleh dosen yang bersangkutan
- Dosen dapat memberikan instruksi yang harus dikerjakan oleh mahasiswa
- Instruksi berupa deskripsi teks dan dapat diberikan tambahan upload berkas (gambar atau dokumen)
- Mahasiswa dapat men-submit hasi pekerjaan pada halaman instruksi yang diberikan
- Submit hasil pekerjaan berupa upload berkas yang diberi tambahan teks deskripsi
- Dosen dapat memberikan komentar atas hasil pekerjaan yang telah di-submit mahasiswa
- Dosen dapat memvalidasi pekerjaan mahasiswa yang menandakan instruksi telah selesai
  dilaksanakan mahasiswa dengan baik
- Mahasiswa dapat melihat seluruh instruksi baik yang sudah dikerjakan maupun yang belum dikerjakan
- Mahasiswa dapat melihat seluruh hasil pekerjaannya yang telah di-submit sebelumnya
- Dosen dapat melihat progres masing-masing mahasiswa bimbingannya secara detail



## Proyek 3 : Medical Center ##

Aplikasi berbasis web yang digunakan untuk memberikan prediksi kemungkinan penyakit serta obatnya
berdasarkan gejala-gejala yang diinputkan. Hanya dokter yang menginputkan kemungkinan penyakit
beserta gejala-gejalanya, sedangkan pengguna umum hanya dapat melihat dan melakukan eksplorasi pada
basis data penyakit yang telah diinputkan.

### Deskripsi Pengguna ###

Aplikasi ini hanya memiliki 1 (satu) jenis pengguna yang berhak login yaitu Dokter saja. Seorang
dokter harus mendaftar dan login terlebih untuk sebelumnya dapat menginputkan kemungkinan penyakit
dan gejala yang menyertainya.

Adapun pengguna lain adalah pengguna umum yang tidak perlu melakukan login dan dapat langsung mencari
kemungkinan penyakit berdasarkan gejala yang dirasaknnya.

### Workflow Penggunaan Aplikasi ###

1. Dokter melakukan registrasi dan Login
2. Dokter menginputkan deskripsi penyakit 
    1. Dokter menginputkan nama penyakit kemudian search untuk memastikan penyakit tersebut belum
       diinputkan sebelumnya.  
    2. Jika penyakit belum ada, Dokter menginputkan beberapa gejala penyakit 
       (jumlah gejala yang diinputkan unlimited), diikuti inputan deskripsi penyakit dan obatnya
    3. Jika penyakit sudah ada, Dokter dapat melihat deskripsinya dan melakukan edit jika diperlukan
3. Pengguna melakukan browse pada 10 penyakit terbaru dan 10 penyakit yang paling banyak diderita
   oleh pengguna lain.
4. Pengguna melakukan search penyakit berdasarkan nama penyakit
5. Pengguna melakukan deteksi penyakit dengan menginputkan gejala yang dirasakan
6. Aplikasi mencocokkan gejala dengan basis data dan menampilkan informasi tentang penyakit yang
   sesuai dengan gejala tersebut

### Spesifikasi Aplikasi ###

Adapun spesifikasi yang harus ada pada aplikasi medical center ini adalah:

- Dokter dapat melakukan registrasi
- Dokter dapat melakukan login
- Dokter dapat mencari daftar penyakit yang sudah ditambahkan
- Dokter dapat menambahkan daftar penyakit baru
- Data penyakit baru yang diinputkan adalah :
  - Nama Penyakit
  - Deskripsi Penyakit
  - List Gejala
  - Obat atau penanganan
  - Tingkat kewaspadaan (Ringan, Sedang, Berat, Parah)
- List gejala dapat dihubungkan dengan penyakit
- Dokter dapat mengetahui histori list penyakit yang telah diinputkannya
- Dokter dapat mengetahui histori list gejala yang telah diinputkannya 
- Pengguna dapat mencari penyakit apa saja yang memiliki suatu gejala
  misalkan pengguna satu gejala "Batuk", maka aplikasi dapat menampilkan
  semua penyakit yang memiliki gejala batuk
- Pengguna dapat menampilkan informasi 10 penyakit yang paling banyak dicari
- Pengguna dapat menampilkan informasi 10 penyakit yang terakhir diinputkan
- Pengguna dapat mengetahui siapa dokter yang menginputkan data penyakit tertentu
- Pengguna dapat mengetahui 10 dokter yang paling banyak menginputkan data penyakit

 

## Proyek 4 : Complaint it Up ##

Aplikasi berbasis web yang dapat digunakan konsumen untuk melakukan komplain terhadap
apapun, baik terhadap perusahaan, instansi pendidikan, pemerintah, keamanan, dan lain
sebagainya. Data komplain tersebut akan disimpan dan diteruskan ke instansi terkait
sebagai masukan.


### Deskripsi Pengguna ###

Aplikasi ini memiliki 2 jenis pengguna yaitu:

1. Konsumen: setelah mendaftarkan diri dan login, konsumen dapat menuliskan komplain
   terhadap apapun yang diinginkannya. Saat menuliskan komplain, konsumen dapat 
   menampilkan profilnya secara jelas atau hanya menampilkan data anonim saja.
2. Instansi: pengguna instansi tidak dapat menuliskan komplain, tapi dapat membaca
   ringkasan komplain secara terstruktur sesuai dengan kategori instansi tersebut.


### Workflow Penggunaan Aplikasi ###

1. Konsumen melakukan registrasi
2. Konsumen melakukan login ke dalam aplikasi
3. Konsumen menuliskan komplain terhadap sesuatu. 
4. Pengunjung umum dapat mengeksplorasi 20 komplain terbaru
5. Pengunjung dapat mengeksplorasi komplain berdasarkan kategori tertentu
6. Instansi melakukan registrasi, dengan menginputkan data Nama Instansi dan 
   kategori Instansi (boleh lebih dari 1)
7. Instansi melakukan login ke dalam aplikasi
8. Instansi dapat melihat komplain yang sesuai dengan kategorinya
9. Instansi mendapatkan notifikasi komplain yang secara khusus ditujukan kepada
   instansinya.
10. Instansi dapat mengomentari komplain yang secara khusus ditujukan kepada
    instansinya.
11. Konsumen dapat  membaca komentar yang diberikan instansi terkait terhadap
    komplain yang diberikan


### Spesifikasi Aplikasi ###

Adapun spesifikasi yang harus ada pada aplikasi Complain It Up adalah:

- Konsumen dan Instansi dapat melakukan registrasi
- Konsumen dan Instansi dapat melakukan login
- Konsumen dapat menuliskan komplain. Adapun data komplain yang harus
  disimpan ke dalam basis data adalah:
  - Judul komplain
  - Konten komplain
  - Kategori (boleh lebih dari satu)
  - Instansi yang dikomplain (opsional)
  - Tampilkan secara anonim atau tidak
- Konsumen dapat melihat data komplain yang pernah ditulisnya
- Instansi dapat melihat komplain yang sesuai dengan kategori instansinya
- Instansi mendapatkan notifikasi khusus jika ada komplain yang spesifik
  ditujukan ke instansi tersebut
- Instansi dapat memberikan komentar pada komplain yang spesifik
  ditujukan ke instansi tersebut
- Konsumen dapat membaca komentar dari instansi yang dikomplain sebelumnya
- Komplain dapat ditampilkan perkategori
- Pengguna dapat mencari komplain berdasarkan kategori, nama instansi, judul,
  dan konten komplain
- Konsumen dan instansi dapat memberikan rating +1 dan -1 untuk semua komplain
- Aplikasi dapat menampilkan ringkasan komplain berdasarkan:
  - 20 komplain terbaru
  - 20 dengan rating tertinggi
  - 20 komplain dengan rating terendah



## Proyek 5 : Job House ##

Aplikasi berbasis web yang digunakan untuk mempublikasikan data lowongan pekerjaan
dan juga memberikan kesempatan pencari kerja untuk mendaftar dan memberikan 
kualifikasinya secara online


### Deskripsi Pengguna ###

Ada 2 Jenis pengguna pada aplikasi Job House ini:

1. Perusahaan: setelah melakukan registrasi dan login, perusahaan dapat mempostingkan
   lowongan pekerjaan beserta kualifikasi yang diinginkan serta jumlah yang dikehendaki.
   Setelah semua lowongan terisi, perusahaan dapat menandainya "Terisi".
2. Pekerja: setelah melakukan registrasi dan login, pekerja dapat mengirimkan kualifikasinya
   ke perusahaan yang membuka lowongan pekerjaan. Selain itu, pekerja juga dapat mengomentari
   dan bertanya tentang lowongan pekerjaan yang belum jelas deskripsinya.

Selain kedua jenis pengguna tersebut, tentu  saja pengguna umum dapat sekedar melihat
semua lowongan pekerjaan yang diposting pada aplikasi ini.


### Workflow Penggunaan Aplikasi ###

1. Perusahaan melakukan registrasi
2. Perusahaan melakukan login ke dalam aplikasi
3. Perusahaan memposting lowongan pekerjaan
4. Pengguna umum mengeksplore lowongan pekerjaan
5. Pekerja melakukan registrasi dan login ke dalam aplikasi
6. Pekerja mengisikan curriculum vitae dan kualifikasinya
7. Pekerja mengomentari dan bertanya pada halaman lowongan pekerjaan yang masih
   kurang jelas deskripsinya
8. Pekerja memasukkan lamaran dengan mengirimkan curriculum vitae
9. Perusahaan dapat melihat curriculum vitae dari semua pekerja yang melamar untuk
   lowongan pekerjaan tertentu
10. Perusahaan menerima calon pekerja yang paling cocok dengan kualifikasi
11. Pekerja yang lamarannya diterima, mendapat notifikasi
12. Setelah perusahaan mendapatkan pelamar yang cocok dan sesuai dengan jumlah yang
    dikehendaki, lowongan pekerjaan otomatis dilabeli sebagai "Terisi"


### Spesifikasi Aplikasi ###

Adapun spesifikasi yang harus ada pada aplikasi Job House ini adalah:

- Perusahaan dan Pekerja dapat melakukan registrasi
- Data yang harus di simpan pada registrasi perusahaan adalah:
  - Nama Perusahaan
  - Alamat Perusahaan
  - Email & Telepon Resmi Perusahaan
  - Deskripsi Perusahaan
  - Jenis pekerjaan yang terdapat pada perusahaan (bisa lebih dari 1)
- Sedangkan data pekerja yang harus diberikan pada saat registrasi adalah:
  - Nama Lengkap
  - Kota, Propinsi, dan alamat lengkap
  - Kontak Email, Telepon, dan Handphone
  - Pendidikan terakhir
  - Skill dan Keahlian (boleh lebih dari satu)
  - Dokumen dan skill pendukung
- Perusahaan dapat melakukan posting lowongan pekerjaan, dengan data yang harus dicantumkan:
  - Nama Pekerjaan
  - Deskripsi Pekerjaan
  - Kualifikasi yang diperlukan
  - Jenis pekerjaan (Tetap, Kontrak, Freelance)
  - Jumlah orang yang diperlukan
  - Sudah terisi atau belum
- Pengguna umum dapat mengeksplore semua pekerjaan tanpa harus login terlebih dahulu
- Pengguna umum dapat melakukan pencarian terhadap pekerjaan sesuai dengan kata kunci
- Pekerja dan perusahaan dapat mengomentari (bertanya & menjawab) lowongan pekerjaan 
  yang belum jelas deskripsinya
- Pekerja dapat mengajukan lamaran pada lowongan pekerjaan tertentu
- Perusahaan dapat melihat semua lamaran pekerjaan yang masuk
- Perusahaan dapat memilih dan menerima sebagian dari lamaran yang masuk
- Apabila perusahaan telah menerima lamaran sesuai dengan lowongan yang diposting,
  aplikasi harus secara otomatis memberikan label "Lowongan Sudah Terisi" pada lowongan tersebut.