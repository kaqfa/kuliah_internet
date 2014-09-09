# Proyek Akhir Pemrograman Internet #

Halaman ini memuat deskripsi proyek akhir untuk mata kuliah Pemrograman Internet.
Meski demikian, bagi pembaca yang tertarik untuk melakukan proyek tersebut, boleh
juga mencobannya.



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


## Proyek 5 : Job House ##
