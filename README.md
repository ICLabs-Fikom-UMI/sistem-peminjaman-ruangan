# SIPIRA - Sistem Peminjaman Ruangan
> [!NOTE]
> Adam Adnan - 13020200103

### Deskripsi Aplikasi
- Alasan saya memilih untuk membuat aplikasi ini adalah untuk menyederhanakan proses peminjaman ruangan dengan menyediakan platform yang mudah diakses secara online. Hal ini diharapkan dapat meningkatkan efisiensi dan mengurangi hambatan administratif dalam melakukan peminjaman. Dengan demikian, mahasiswa tidak perlu lagi datang langsung ke kepala laboratorium untuk mengajukan peminjaman ruangan dan diarahkan ke laboran untuk pengisian formulir.
- Tujuan saya dalam pembuatan website ini adalah untuk menyederhanakan proses peminjaman ruangan di Laboratorium Terpadu Fakultas Ilmu Komputer.
- Teknologi yang digunakan : PHP, MySQL, Bootstrap

### Fitur MVP Aplikasi
- Grafik statistik peminjaman dan pengguna per jurusan.
- Notifikasi otomatis ke admin untuk permintaan peminjaman baru.
- Notifikasi ke pengguna tentang status peminjaman.
- Fitur laporan untuk mengekspor data peminjaman berdasarkan tanggal.

### Penjelasan Mengenai Arsitektur MVC
Model View Controller atau yang dapat disingkat MVC adalah sebuah pola arsitektur dalam membuat sebuah aplikasi dengan cara memisahkan kode menjadi tiga bagian yang terdiri dari:
- Model
  Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data yang ada di database.
- View
  Bagian yang bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).
- Controller
  Bagian yang bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung.
  
#### Alur Model View Controller
- Proses pertama adalah view akan meminta data untuk ditampilkan dalam bentuk grafis kepada pengguna.
- Permintaan tersebut diterima oleh controller dan diteruskan ke model untuk diproses.
- Model akan mencari dan mengolah data yang diminta di dalam database
- Setelah data ditemukan dan diolah, model akan mengirimkan data tersebut kepada controller untuk ditampilkan di view.
- Controller akan mengambil data hasil pengolahan model dan mengaturnya di bagian view untuk ditampilkan kepada pengguna.


### LINK UML [CLICK HERE](https://drive.google.com/file/d/1SIedanXX8FDAj2kAhyjokqxxOUaTejex/view?usp=sharing)
### LINK ERD [CLICK HERE](https://drive.google.com/file/d/1whf-5t3ToEaB3GluxBjcu2KnPBs4T9N1/view?usp=sharing)
### LINK UI/UX [CLICK HERE](https://www.figma.com/file/TEg3cPPMmLLneebIlB92ev/ICLabs-websites?type=design&node-id=71%3A8&mode=design&t=T2HckajX9SXMZGiP-1)

> [!CAUTION]
> PHP VERSION 8.3.2


