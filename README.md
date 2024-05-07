# TP4DPBO2024C2

## Janji
Saya Muhamad Tio Ariyanto [2201718] mengerjakan soal Tugas Praktikum 4
dalam mata kuliah DPBO untuk keberkahanNya saya tidak melakukan kecurangan
seperti yang telah dispesifikasikan. Aamiin

## Desain Program
Program ini merupakan program PHP yang mengimplementasikan MVC (Model, View, Controller). Program ini digunakan untuk melakukan manajemen pada member dan membership dari seorang kreator. Program ini memungkinkan pengguna untuk melakukan penambahan data, melihat data, edit data, serta menghapus data dari member atau membership yang ditawarkannya.

Berikut merupakan desain dari database program ini:
![desain_db](https://github.com/Osaraku/TP4DPBO2024C2/assets/117560099/0e849ae6-3ecf-45ff-bfd1-cc8f19f85130)

Terdapat 2 tabel pada database ini, yaitu:
1. Tabel `Member` yang berisi data-data dari member yang join membership sang kreator seperti Nama, Email, No.Telp, Membership yang dipilih, dan tanggal join membershipnya.
2. Tabel `Membership` yang berisi data-data benefit yang ditawarkan sang kreator jika join membershipnya seperti Nama Membership, Harga, dan Deskripsi dari benefit apa yang didapat jika join membership tersebut.

Sementara untuk komponen-komponen dari program ini, antara lain:
1. `Models` : Terdiri dari `Member.class.php`, `Membership.class.php`, `DB.class.php`, `Template.class.php` yang digunakan untuk berinteraksi dengan database serta memiliki metode untuk mengambil data, menambahkan data, mengedit data, dan menghapus data dari member dan membership.
2. `Views` : Terdiri dari `Member.view.php`, `MemberForm.view.php`, `Membership.view.php`, `MembershipForm.view.php` yang digunakan untuk menampilkan tabel yang berisi list member dan membership serta menampilkan tampilan form untuk menambahkan dan mengedit data member dan membership.
3. `Controller` : Terdiri dari `Member.controller.php` dan `Membership.controller.php` yang digunakan sebagai perantara antara Models dan Views. Dimana controller akan mengelola dan memproses data dari Models yang kemudian nantinya akan ditampilkan di Views.
4. `Templates` : Terdiri dari `form.html` dan `table.html` merupakan tampilan dasar pada halaman Tabel dan Form dari member dan membership yang nantinya akan disesuaikan isinya pada bagian Views.
5. `connection.php` : Digunakan untuk menyimpan konfigurasi koneksi ke database.
6. `index.php` & `membership.php` : Digunakan untuk menyimpan kondisi-kondisi pada data member dan membership yang kemudian akan mengakses controller.

## Alur Program
1. Ketika pengguna membuka program untuk pertama kali, pengguna akan diarahkan ke `index.php` yang berisikan data-data dari member dalam bentuk tabel.
2. Di dalam halaman `index.php` ini, pengguna memiliki opsi untuk menambah anggota baru dengan mengklik tombol "Add New Member" yang mengarahkan mereka ke halaman `MemberForm.view.php`.
3. Pada halaman `MemberForm.view.php`, pengguna dapat mengisi formulir member baru yang terdiri dari Nama, Email, No.Telp, Membership yang dipilih, dan tanggal join. Setelah selesai mengisi formulirnya, pengguna dapat menekan tombol "Submit". apabila terdapat tampilan pesan yang memberitahukan bahwa data sudah berhasil atau gagal untuk ditambahkan, jika berhasil maka data member baru telah dimasukkan ke dalam database.
4. Selain menambahkan member baru, Pengguna juga dapat memperbarui data dan menghapus anggota yang sudah terdaftar dengan menekan tombol "Edit" atau "Delete" di bagian kanan dari tabel yang menampilkan list anggota.
5. Ketika tombol "Edit" ditekan, maka pengguan akan dibawa ke halaman `MemberForm.view.php` yang sudah terisi data dari member yang dipilih, pengguna dapat mengedit detail anggota dan menyimpan perubahannya.
6. Ketika tombol "Delete" ditekan, maka program ini akan menghapus data member yang sudah dipilih sebelumnya dan menampilkan pesan konfirmasi penghapusan dan pemberitahuan ketika data telah berhsail atau gagal dihapus.
7. Setelah pengguna melakukan edit atau penghapusan pada data, maka pengguna akan diarahkan ke halaman utama yang sudah diperbarui secara otomatis sesuai dengan perubahan yang terjadi pada database.
8. Selain melihat data dan melakukan operasi CRUD pada member, pengguna juga dapat melakukan hal yang sama pada data membership ketika pengguna menekan tombol "Membership" di navbar. Hal-hal yang dapat dilakukan pada data member diatas dapat juga dilakukan pada data-data membership.

## Dokumentasi
https://github.com/Osaraku/TP4DPBO2024C2/assets/117560099/2fe1d9fb-5fcc-4811-b56f-4dc96d1a67c5

